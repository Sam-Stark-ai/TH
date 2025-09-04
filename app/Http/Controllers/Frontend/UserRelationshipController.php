<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserRelationship;
use App\Models\User;
use App\Models\RingOrder;
use App\Models\BpmHistory;
use App\Models\RelationshipType;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRelationshipController extends Controller
{
    /**
     * List all relationships of the authenticated user
     */

/**
 * Get BPM history of authenticated user and their partners with query params
 * Query parameters supported:
 *  - partner_id (optional): fetch BPM for a specific partner only
 *  - start_date (optional): YYYY-MM-DD
 *  - end_date (optional): YYYY-MM-DD
 */
public function getBpmWithPartners(Request $request)
{
    $user = $request->user();

    $partnerId = $request->query('partner_id');
    $range = $request->query('range', 'daily'); // daily, weekly, monthly
    $startDate = $request->query('start_date');
    $endDate = $request->query('end_date');

    // Get all connected partner IDs
    $partnerIds = \App\Models\UserRelationship::where('user_id', $user->id)
        ->orWhere('related_user_id', $user->id)
        ->get()
        ->map(fn($r) => $r->user_id == $user->id ? $r->related_user_id : $r->user_id)
        ->unique()
        ->values();

    if ($partnerId) {
        if (!$partnerIds->contains($partnerId)) {
            return response()->json(['message' => 'Partner not found'], 404);
        }
        $partnerIds = collect([$partnerId]);
    }

    // Fill empty days if data is missing
    $fillEmptyDays = function(array $history, int $days = 30, $type = 'bpm') {
        $filled = [];
        for ($i = $days - 1; $i >= 0; $i--) {
            $date = now()->subDays($i)->toDateString();
            $day = collect($history)->first(fn($h) => $h['date'] === $date);

            $filled[] = $type === 'bpm'
                ? ['date' => $date, 'bpm_points' => $day['bpm_points'] ?? []]
                : ['date' => $date, 'ekg_points' => $day['ekg_points'] ?? []];
        }
        return $filled;
    };

    // Aggregate monthly data: 4 weeks average
 // Aggregate monthly data: 4 weeks average
$aggregateMonthly = function(array $history, $type = 'bpm') {
    $weeks = array_chunk($history, 7); // 4 weeks
    $result = [];

    foreach ($weeks as $i => $week) {
        $points = [];
        $weekStart = $week[0]['date'] ?? now()->subWeeks(4 - $i)->toDateString();

        foreach ($week as $day) {
            if ($type === 'bpm') {
                foreach ($day['bpm_points'] as $p) {
                    $points[] = $p['bpm'];
                }
            } else {
                foreach ($day['ekg_points'] as $p) {
                    $points = array_merge($points, $p['ekg']);
                }
            }
        }

        $result[] = $type === 'bpm'
            ? [
                'date' => $weekStart, // ✅ label for the week
                'bpm_points' => $points
                    ? [['time' => '', 'bpm' => round(array_sum($points) / count($points), 1)]]
                    : []
            ]
            : [
                'date' => $weekStart, // ✅ label for the week
                'ekg_points' => $points
                    ? [['time' => '', 'ekg' => $points]]
                    : []
            ];
    }

    return $result;
};


    // Filter history by range
    $filterHistory = function(array $history, string $range, $startDate, $endDate, string $type) use ($fillEmptyDays, $aggregateMonthly) {
        $history = $history ?? [];
        $history = $fillEmptyDays($history, 30, $type);

        // Apply custom start/end date filter if provided
        if ($startDate || $endDate) {
            $history = collect($history)
                ->filter(fn($e) => (!$startDate || $e['date'] >= $startDate) && (!$endDate || $e['date'] <= $endDate))
                ->values()->all();
        }

        switch ($range) {
            case 'daily':
                $today = now()->toDateString();
                $history = collect($history)->filter(fn($e) => $e['date'] === $today)->values()->all();
                break;

            case 'weekly':
                $weekAgo = now()->subDays(6)->toDateString(); // 7 days including today
                $history = collect($history)->filter(fn($e) => $e['date'] >= $weekAgo)->values()->all();
                break;

            case 'monthly':
                $monthAgo = now()->subDays(27)->toDateString(); // 28 days = 4 weeks
                $history = collect($history)->filter(fn($e) => $e['date'] >= $monthAgo)->values()->all();
                $history = $aggregateMonthly($history, $type);
                break;
        }

        return $history;
    };

    // User history
    $userHistory = \App\Models\BpmHistory::where('user_id', $user->id)->first();
    $bpmHistory = $filterHistory($userHistory->bpm_history ?? [], $range, $startDate, $endDate, 'bpm');
    $ekgHistory = $filterHistory($userHistory->ekg_history ?? [], $range, $startDate, $endDate, 'ekg');

    // Partners history
    $partnersData = \App\Models\BpmHistory::whereIn('user_id', $partnerIds)->get()->mapWithKeys(function ($bpm) use ($filterHistory, $range, $startDate, $endDate) {
        return [
            $bpm->user_id => [
                'bpm_history' => $filterHistory($bpm->bpm_history ?? [], $range, $startDate, $endDate, 'bpm'),
                'ekg_history' => $filterHistory($bpm->ekg_history ?? [], $range, $startDate, $endDate, 'ekg'),
            ]
        ];
    });

    // Build response
    $response = [
        'user' => [
            'id' => $user->id,
            'name' => $user->name,
            'bpm_history' => $bpmHistory,
            'ekg_history' => $ekgHistory,
        ],
        'partners' => []
    ];

    foreach ($partnerIds as $pid) {
        $partner = \App\Models\User::find($pid);
        if (!$partner) continue;

        $response['partners'][] = [
            'id' => $partner->id,
            'name' => $partner->name,
            'bpm_history' => $partnersData[$pid]['bpm_history'] ?? [],
            'ekg_history' => $partnersData[$pid]['ekg_history'] ?? [],
        ];
    }

    return response()->json($response);
}




private function fillEmptyDays(array $history, int $days = 30): array {
    $filled = [];
    for ($i = $days - 1; $i >= 0; $i--) {
        $date = now()->subDays($i)->toDateString();
        $day = collect($history)->first(fn($h) => $h['date'] === $date);
        $filled[] = [
            'date' => $date,
            'bpm_points' => $day['bpm_points'] ?? [],
            'ekg_points' => $day['ekg_points'] ?? [],
        ];
    }
    return $filled;
}

/**
 * Aggregate monthly data: 4 weeks average
 */
private function aggregateMonthly(array $history): array {
    $weeks = array_chunk($history, 7); // split into 4 weeks
    $result = [];

    foreach ($weeks as $week) {
        $weekBpm = [];
        $weekEkg = [];
        foreach ($week as $day) {
            foreach ($day['bpm_points'] as $p) $weekBpm[] = $p['bpm'];
            foreach ($day['ekg_points'] as $p) $weekEkg = array_merge($weekEkg, $p['ekg']);
        }

        $result[] = [
            'bpm_points' => $weekBpm ? [['time' => '', 'bpm' => round(array_sum($weekBpm)/count($weekBpm),1)]] : [],
            'ekg_points' => $weekEkg ? [['time' => '', 'ekg' => $weekEkg]] : [],
        ];
    }

    return $result;
}

/**
 * Filter history based on range: daily / weekly / monthly
 */
/**
 * Filter history based on range: daily / weekly / monthly
 */
private function filterHistoryByRange($bpmHistory, $ekgHistory, $range)
{
    $now = now();
    switch ($range) {
        case 'weekly':
            $startDate = $now->copy()->subDays(7)->toDateString();
            break;
        case 'monthly':
            $startDate = $now->copy()->subDays(30)->toDateString();
            break;
        case 'daily':
        default:
            $startDate = $now->toDateString();
            break;
    }

    // Filter only entries that have 'date' key
    $bpmHistory = collect($bpmHistory)->filter(fn($e) => isset($e['date']) && $e['date'] >= $startDate)->values()->all();
    $ekgHistory = collect($ekgHistory)->filter(fn($e) => isset($e['date']) && $e['date'] >= $startDate)->values()->all();

    return [$bpmHistory, $ekgHistory];
}






public function index()
{
    $user = Auth::user();

    $relationships = UserRelationship::with(['relatedUser', 'relationshipType'])
        ->where(function ($query) use ($user) {
            $query->where('user_id', $user->id)
                  ->orWhere('related_user_id', $user->id);
        })
        ->get()
        ->map(function ($relationship) use ($user) {
            // Normalize: always return "relatedUser" as the other person
            if ($relationship->user_id == $user->id) {
                $relationship->related_user = $relationship->relatedUser;
            } else {
                $relationship->related_user = User::find($relationship->user_id);
            }

            unset($relationship->relatedUser); // Remove original relation to avoid confusion
            return $relationship;
        });

    return response()->json(['data' => $relationships]);
}


    public function getAllRelationshipTypes()
{
    $types = RelationshipType::all();

    return response()->json([
        'data' => $types
    ]);
}

    /**
     * Create a new relationship
     */
public function store(Request $request)
{
    $user = Auth::user();

    $validator = Validator::make($request->all(), [
        'related_user_code' => 'required|string|exists:users,connection_code',
        'relationship_type_id' => 'required|exists:relationship_types,id',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    $relatedUser = User::where('connection_code', $request->related_user_code)->first();

    if ($relatedUser->id === $user->id) {
        return response()->json(['message' => 'You cannot create a relationship with yourself'], 400);
    }

    $relationshipTypeId = $request->relationship_type_id;

    // Ensure consistent user order (smallest user ID first)
    $userA = min($user->id, $relatedUser->id);
    $userB = max($user->id, $relatedUser->id);

    // ❗ Check if any relationship (regardless of type) already exists between them
    $exists = UserRelationship::withTrashed()
        ->where('user_id', $userA)
        ->where('related_user_id', $userB)
        ->exists();

    if ($exists) {
        return response()->json(['message' => 'A relationship already exists between these users'], 409);
    }

    // ✅ Create new relationship (only one row)
    UserRelationship::create([
        'user_id' => $userA,
        'related_user_id' => $userB,
        'relationship_type_id' => $relationshipTypeId,
    ]);

    return response()->json(['message' => 'Relationship created successfully']);
}



    /**
     * Delete a relationship by ID (if owned by the authenticated user)
     */
public function destroy($relatedUserId)
{
    $user = Auth::user();

    $relationship = UserRelationship::where(function ($query) use ($user, $relatedUserId) {
            // Case 1: logged-in user is "user_id"
            $query->where('user_id', $user->id)
                  ->where('related_user_id', $relatedUserId);
        })
        ->orWhere(function ($query) use ($user, $relatedUserId) {
            // Case 2: logged-in user is "related_user_id"
            $query->where('related_user_id', $user->id)
                  ->where('user_id', $relatedUserId);
        })
        ->first();

    if (!$relationship) {
        \Log::warning('Relationship deletion failed', [
            'requested_related_user_id' => $relatedUserId,
            'user_id'                   => $user->id,
            'reason'                    => 'Not found or unauthorized'
        ]);

        return response()->json(['message' => 'Relationship not found or unauthorized'], 404);
    }

    $otherUserId = $relationship->user_id == $user->id
        ? $relationship->related_user_id
        : $relationship->user_id;

    $relationship->delete();

    \Log::info('Relationship deleted successfully', [
        'relationship_id'      => $relationship->id,
        'deleted_by_user_id'   => $user->id,
        'other_user_id'        => $otherUserId,
        'relationship_type_id' => $relationship->relationship_type_id
    ]);

    return response()->json(['message' => 'Relationship deleted successfully']);
}

public function isConnectedWithOwner(Request $request)
{
    $user = $request->user();
    
    // Get all connected partner IDs
    $partnerIds = UserRelationship::where('user_id', $user->id)
        ->orWhere('related_user_id', $user->id)
        ->get()
        ->map(fn($r) => $r->user_id == $user->id ? $r->related_user_id : $r->user_id)
        ->unique()
        ->values();
    
    // Check if any of the connected partners have ring orders (are owners)
    $hasOwnerConnection = RingOrder::whereIn('user_id', $partnerIds)->exists();
    
    return response()->json([
        'is_connected_with_owner' => $hasOwnerConnection ? 1 : 0
    ]);
}

/**
 * Static method to check if a user is connected with another owner
 * This can be called from other controllers
 */
public static function checkIfConnectedWithOwner($userId)
{
    // Get all connected partner IDs
    $partnerIds = UserRelationship::where('user_id', $userId)
        ->orWhere('related_user_id', $userId)
        ->get()
        ->map(fn($r) => $r->user_id == $userId ? $r->related_user_id : $r->user_id)
        ->unique()
        ->values();
    
    // Check if any of the connected partners have ring orders (are owners)
    return RingOrder::whereIn('user_id', $partnerIds)->exists();
}


}
