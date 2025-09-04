<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use App\Models\UserRelationship;
use App\Models\BpmHistory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;

class BpmBroadcasted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets;

    public $user_id;
    public $bpm;
    public $time;
    public $ekg;

    public function __construct($user_id, $bpm, $time, $ekg = [])
    {
        $this->user_id = $user_id;
        $this->bpm = (int)$bpm;
        $this->time = $time;
        $this->ekg = $ekg;

        $bpmHistory = BpmHistory::firstOrCreate(
            ['user_id' => $this->user_id],
            ['bpm_history' => [], 'ekg_history' => []]
        );

        $today = now()->toDateString();
        $currentHour = now()->format('H:00'); // only hour

        $bpmData = $bpmHistory->bpm_history ?? [];
        $ekgData = $bpmHistory->ekg_history ?? [];

        // Find today's index
        $index = collect($bpmData)->search(fn($entry) => $entry['date'] === $today);

        if ($index !== false) {
            // Remove existing point for this hour
            $bpmData[$index]['bpm_points'] = collect($bpmData[$index]['bpm_points'])
                ->reject(fn($p) => $p['time'] === $currentHour)
                ->values()
                ->all();

            $ekgData[$index]['ekg_points'] = collect($ekgData[$index]['ekg_points'])
                ->reject(fn($p) => $p['time'] === $currentHour)
                ->values()
                ->all();

            // Append new reading
            $bpmData[$index]['bpm_points'][] = ['time' => $currentHour, 'bpm' => $this->bpm];
            $ekgData[$index]['ekg_points'][] = ['time' => $currentHour, 'ekg' => $this->ekg];
        } else {
            // New daily entry
            $bpmData[] = [
                'date' => $today,
                'bpm_points' => [['time' => $currentHour, 'bpm' => $this->bpm]],
            ];
            $ekgData[] = [
                'date' => $today,
                'ekg_points' => [['time' => $currentHour, 'ekg' => $this->ekg]],
            ];
        }

        // Keep only last 30 days
        $bpmHistory->bpm_history = array_slice($bpmData, -30);
        $bpmHistory->ekg_history = array_slice($ekgData, -30);
        $bpmHistory->save();

        Log::info('BpmBroadcasted saved', [
            'user_id' => $user_id,
            'bpm' => $bpm,
            'time' => $time,
            'ekg_count' => count($ekg),
            'history_count' => count($bpmHistory->bpm_history),
        ]);
    }

    public function broadcastOn()
    {
        $connectedUserIds = UserRelationship::where('user_id', $this->user_id)
            ->orWhere('related_user_id', $this->user_id)
            ->pluck('user_id')
            ->merge(UserRelationship::where('user_id', $this->user_id)
                ->orWhere('related_user_id', $this->user_id)
                ->pluck('related_user_id'))
            ->unique()
            ->filter(fn($id) => $id != $this->user_id);

        $channels = $connectedUserIds->map(fn($id) => new Channel('bpm-channel.' . $id))->toArray();
        $channels[] = new Channel('bpm-channel.' . $this->user_id);

        return $channels;
    }

    public function broadcastAs()
    {
        return 'bpm-updated';
    }

    public function broadcastWith()
    {
        return [
            'user_id' => $this->user_id,
            'bpm' => $this->bpm,
            'time' => $this->time,
            'ekg' => $this->ekg,
        ];
    }
}
