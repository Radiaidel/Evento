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
}
