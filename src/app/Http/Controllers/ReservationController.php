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
        // Récupérer l'événement
        $event = Event::findOrFail($request->event_id);

        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Vérifier si l'utilisateur a déjà une réservation pour cet événement
        $reservation = $user->reservations()->where('event_id', $event->id)->first();
        
        // Logique de réservation
        if ($event->reservation_mode === 'auto') {
            if ($reservation) {
                // Si une réservation existe déjà, mettre à jour le statut si elle est acceptée
                if ($reservation->status === 'accepted') {
                    return redirect()->route('ticket.show', $reservation->id);
                }
                $reservation->update(['statut' => 'accepted']);
            } else {
                // Créer une nouvelle réservation avec le statut "accepted"
                $reservation = $user->reservations()->create([
                    'event_id' => $event->id,
                    'statut' => 'accepted'
                ]);
            }
        } else {
            // Créer une nouvelle réservation avec le statut "pending"
            $reservation = $user->reservations()->create([
                'event_id' => $event->id,
                'statut' => 'pending'
            ]);
            return redirect()->back();
        }

        // Rediriger vers la page du ticket avec un message de succès
        return redirect()->route('ticket.show', $reservation->id)->with('success', 'Reservation successful!');
    }
}
