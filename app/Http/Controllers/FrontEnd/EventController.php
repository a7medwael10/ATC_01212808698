<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(6);
        $bookedEventIds = auth()->check()
            ? Booking::where('user_id', auth()->id())->pluck('event_id')->toArray()
            : [];

        return view('frontend.index', compact('events', 'bookedEventIds'));

    }

    public function show(Event $event)
    {
        $isBooked = $event->bookings()
            ->where('user_id', auth()->id())
            ->exists();

        return view('frontend.show', compact('event', 'isBooked'));
    }

    public function book(Event $event)
    {
        $user = auth()->user();

        $existing = Booking::where('user_id', $user->id)
            ->where('event_id', $event->id)
            ->first();

        if ($existing) {
            $existing->delete();
            return response()->json(['status' => 'cancelled']);
        } else {
            Booking::create([
                'user_id' => $user->id,
                'event_id' => $event->id,
            ]);
            return response()->json(['status' => 'booked']);
        }
    }


}
