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
            $reservation->event_id = $event_id;
            $reservation->statut = 'pending';

            if ($request->input('mode') === 'manual') {
                $reservation->save();
                return redirect()->route('ticket.index', ['reservation' => $reservation->id]);
            } else {
                $nextPlaceNumber = Reservation::where('event_id', $event_id)
                    ->where('statut', 'accepted')
                    ->count() + 1;

                $reservation->numero_place = $nextPlaceNumber;
                $reservation->statut = 'accepted';
                $reservation->save();

                return redirect()->route('ticket.show', ['reservation' => $reservation->id]);
            }
        }
    }
    public function index()
    {
        $user = Auth::user();
        $userTickets = $user->reservations;

        return view('ticket.index', compact('userTickets'));
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('ticket.show', compact('reservation'));
    }
    public function organizerReservations()
    {
        $userId = auth()->id();

        $pendingReservations = Reservation::whereHas('event', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->where('statut', 'pending')->get();

        return view('ticket.reservations', compact('pendingReservations'));
    }


    public function accept(Request $request)
    {
        $reservationId = $request->input('reservation_id');
        $reservation = Reservation::findOrFail($reservationId);

        $availablePlaces = $reservation->event->nb_places - $reservation->event->reservations()->accepted()->count();
        if ($availablePlaces <= 0) {
            $reservation->statut = 'rejected';
            $reservation->save();
            return redirect()->back()->with('error', 'Désolé, il n\'y a plus de places disponibles pour cet événement.');
        }

        $nextPlaceNumber = Reservation::where('event_id', $reservation->event_id)
            ->where('statut', 'accepted')
            ->count() + 1;

        $reservation->numero_place = $nextPlaceNumber;
        $reservation->statut = 'accepted';
        $reservation->save();

        return redirect()->back()->with('success', 'La réservation a été acceptée avec succès.');
    }

    public function reject(Request $request)
    {
        $reservationId = $request->input('reservation_id');
        $reservation = Reservation::findOrFail($reservationId);

        $reservation->statut = 'rejected';
        $reservation->save();

        return redirect()->back();
    }
}
