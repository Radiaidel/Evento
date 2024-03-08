<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function reserve(Request $request)
    {
        $user = Auth::user();
        $event_id = $request->input('event_id');

        $existingReservation = Reservation::where('user_id', $user->id)
            ->where('event_id', $event_id)
            ->first();

        if ($existingReservation) {
            if ($existingReservation->statut === 'accepted') {
                return redirect()->route('ticket.show', ['reservation' => $existingReservation->id]);
            } elseif ($existingReservation->statut === 'pending') {
                return redirect()->route('ticket.index');
            }
        } else {
            $reservation = new Reservation();
            $reservation->user_id = $user->id;
            $reservation->event_id = $event_id;
            $reservation->numero_reservation = rand(1000, 9999);

            if ($request->input('mode') === 'manual') {
                $reservation->statut = 'pending'; 
                $reservation->save();

                return redirect()->route('ticket.index');
            } else {
                $reservation->statut = 'accepted'; 
                $reservation->save();

                return redirect()->route('ticket.show', ['reservation' => $reservation->id]);
            }
        }
    }

    public function index()
    {
        // Récupérer tous les tickets depuis la base de données
        $userTickets = Reservation::all();

        // Charger la vue index avec les données des tickets
        return view('ticket.index', compact('userTickets'));
    }

    // Fonction pour afficher un seul ticket
    public function show($id)
    {
        // Récupérer le ticket spécifié par son ID depuis la base de données
        $reservation = Reservation::findOrFail($id);

        // Charger la vue ticket avec les détails du ticket
        return view('ticket.show', compact('reservation'));
    }
}
