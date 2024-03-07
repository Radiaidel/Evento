<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;


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
        return view('event.index', ['events' => $events]);
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

    public function userEvents()
    {
        $events = auth()->user()->events; // Récupérer les événements de l'utilisateur connecté

        return view('event.index', compact('events'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('event.create', compact('categories'));
    }
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'nb_available_places' => 'required|integer',
            'reservation_mode' => 'required|string|in:online,offline',
            'price' => 'required|numeric|min:0',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        // Enregistrement de l'événement dans la base de données
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->nb_available_places = $request->nb_available_places;
        $event->reservation_mode = $request->reservation_mode;
        $event->price = $request->price;
        $event->categorie_id = $request->categorie_id;
        $event->user_id = auth()->user()->id;
        $event->status = 'pending';

        // Enregistrement de l'image
        if ($request->hasFile('image_path')) {
            $event->image_path = $request->file('image_path')->store('events', 'public');
        }

        $event->save();

        return redirect()->route('my-events')->with('success', 'Event added successfully.');
    }

    public function edit(Request $request)
    {
        $event = Event::findOrFail($request->input('event_id'));
        $categories = Category::all();
        return view('event.update' , compact('event' , 'categories'));
    }

    public function update(Request $request)
{
    // Valider les données de la demande
    $validatedData = $request->validate([
        'title' => 'required',
        'date' => 'required|date',
        'description' => 'required',
        'location' => 'required',
        'reservation_mode' => 'required|in:auto,manual',
        'categorie_id' => 'required|exists:categories,id',
        'price' => 'required|numeric',
        'nb_available_places' => 'required|integer',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $event = Event::findOrFail($request->input('event_id'));

    $event->title = $validatedData['title'];
    $event->date = $validatedData['date'];
    $event->description = $validatedData['description'];
    $event->location = $validatedData['location'];
    $event->reservation_mode = $validatedData['reservation_mode'];
    $event->categorie_id = $validatedData['categorie_id'];
    $event->price = $validatedData['price'];
    $event->nb_available_places = $validatedData['nb_available_places'];
    $event->status ='pending';

    if ($request->hasFile('image_path')) {
        $imagePath = $request->file('image_path')->store('images', 'public');
        $event->image_path = $imagePath;
    }

    $event->save();

    return redirect()->route('my-events', $event->id)->with('success', 'Event updated successfully');
}

public function delete(Request $request){
    $event = Event::findOrFail($request->input('event_id'));
    $event->delete();
    return redirect()->route('my-events', $event->id)->with('success', 'Event deleted successfully');
}

}
