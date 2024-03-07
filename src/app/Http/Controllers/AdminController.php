<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Reservation;

class AdminController extends Controller
{


    public function dashboard()
    {
        // Nombre total d'utilisateurs
        $totalUsers = User::count();

        // Nombre total d'événements avec différents statuts
        $totalEvents = [
            'accepted' => Event::where('status', 'accepted')->count(),
            'pending' => Event::where('status', 'pending')->count(),
            'rejected' => Event::where('status', 'rejected')->count(),
        ];

        // Nombre total de réservations
        $totalReservations = Reservation::count();

        // Organisateurs avec le plus d'événements créés
        $topOrganizers = User::withCount('events')->orderByDesc('events_count')->limit(4)->get();

        // Utilisateurs bloqués
        $blockedUsers = User::where('blocked', true)->limit(4)->get();

        return view('admin_dashboard', compact('totalUsers', 'totalEvents', 'totalReservations','topOrganizers', 'blockedUsers'));
    }
}
