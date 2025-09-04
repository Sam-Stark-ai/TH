<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\EventCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EventCalendarController extends Controller
{
    public function index()
    {
        Log::info('Fetching events for user', ['user_id' => Auth::id()]);
        
        $events = EventCalendar::where('user_id', Auth::id())->get();
        
        Log::info('Events fetched', ['count' => $events->count()]);
        
        return response()->json($events, 200);
    }

    public function store(Request $request)
    {
        Log::info('Store Event API hit', [
            'user_id' => Auth::id(),
            'request_data' => $request->all()
        ]);

        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'date'  => 'required|string|max:255',
            ]);

            $event = EventCalendar::create([
                'user_id' => Auth::id(),
                'title'   => $request->title,
                'date'    => $request->date,
            ]);

            Log::info('Event created successfully', ['event_id' => $event->id]);

            return response()->json([
                'message' => 'Event created successfully',
                'event'   => $event
            ], 201);

        } catch (\Exception $e) {
            Log::error('Error creating event', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'message' => 'Server Error',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        Log::info('Show Event API hit', [
            'user_id' => Auth::id(),
            'event_id' => $id
        ]);

        $event = EventCalendar::where('user_id', Auth::id())->find($id);

        if (!$event) {
            Log::warning('Event not found', ['event_id' => $id]);
            return response()->json(['message' => 'Event not found'], 404);
        }

        return response()->json($event, 200);
    }

    public function update(Request $request, $id)
    {
        Log::info('Update Event API hit', [
            'user_id' => Auth::id(),
            'event_id' => $id,
            'request_data' => $request->all()
        ]);

        $event = EventCalendar::where('user_id', Auth::id())->find($id);

        if (!$event) {
            Log::warning('Event not found for update', ['event_id' => $id]);
            return response()->json(['message' => 'Event not found'], 404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'date'  => 'required|string|max:255',
        ]);

        $event->update([
            'title' => $request->title,
            'date'  => $request->date,
        ]);

        Log::info('Event updated successfully', ['event_id' => $event->id]);

        return response()->json([
            'message' => 'Event updated successfully',
            'event'   => $event
        ], 200);
    }

    public function destroy($id)
    {
        Log::info('Delete Event API hit', [
            'user_id' => Auth::id(),
            'event_id' => $id
        ]);

        $event = EventCalendar::where('user_id', Auth::id())->find($id);

        if (!$event) {
            Log::warning('Event not found for delete', ['event_id' => $id]);
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->delete();

        Log::info('Event deleted successfully', ['event_id' => $id]);

        return response()->json(['message' => 'Event deleted successfully'], 200);
    }
}
