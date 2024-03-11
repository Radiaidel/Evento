<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    //
    public function index()
    {
        $eventToday = Event::whereDate('date', Carbon::today())->where('user_id',auth()->user()->id)->first();
        $timeLeft="";
        $acceptedReservations="";
        $reservationsCount ="";

        if($eventToday){

            $timeLeft = Carbon::now()->diffForHumans($eventToday->date, ['parts' => 2, 'short' => true]);
            $acceptedReservations = $eventToday->reservations()->where('statut', 'accepted')->count();
            $reservationsCount = Reservation::count();
        }


        $totalAcceptedEvents = Event::where('status', 'accepted')->where('user_id',auth()->user()->id)->count();

        $totalPendingEvents = Event::where('status', 'pending')->where('user_id',auth()->user()->id)->count();

        $totalPendingReservations = Reservation::where('statut', 'pending')->where('user_id',auth()->user()->id)->count();

        $eventsNextThreeDays = Event::whereBetween('date', [Carbon::tomorrow(), Carbon::tomorrow()->addDays(3)])->where('user_id',auth()->user()->id)->get();

        return view('organizer_dashboard', compact('eventToday', 'timeLeft', 'acceptedReservations', 'totalAcceptedEvents', 'totalPendingEvents', 'totalPendingReservations', 'eventsNextThreeDays','reservationsCount'));
    }
}
