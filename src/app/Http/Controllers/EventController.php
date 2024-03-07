<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    //

    public function index()
    {
        $events = Event::paginate(4); // Fetch all events from the database

        return view('dashboard', compact('events'));
    }
    public function pendingEvents()
    {
        $events = Event::where('status', 'pending')->get();
        return view('event.pending', ['events' => $events]);
    }
    public function accept(Event $event)
    {
        $event->status = 'accepted';
        $event->save();

        return redirect()->back()->with('success', 'Event accepted successfully.');
    }

    public function reject(Event $event)
    {
        $event->status = 'rejected';
        $event->save();

        return redirect()->back()->with('success', 'Event rejected successfully.');
    }
    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('event.details', compact('event'));
    }
}
