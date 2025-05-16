<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $events = Event::latest()->has('bookings')->paginate(8);
        return view('admin.bookings.index', compact('events'));
    }

    public function show($id)
    {

        $bookings = Event::findOrFail($id)->bookings()->with('user')->latest()->paginate(8);
        return view('admin.bookings.show', compact('bookings'));
    }

    public function destroy($id)
    {
        $event = Booking::findOrFail($id);
        $event->delete();
        return redirect()->route('admin.bookings.index')->with('success', __('messages.Booking_deleted'));
    }
}
