<x-app-layout>
<h1>All Tickets</h1>
    <ul>
        @foreach($userTickets as $ticket)
        <li>
            <p>Reservation ID: {{ $ticket->id }}</p>
            <p>Event ID: {{ $ticket->event_id }}</p>
            <p>Number of Seats: {{ $ticket->numero_place }}</p>
            <p>Reservation Number: {{ $ticket->numero_reservation }}</p>
            <p>Status: {{ $ticket->statut }}</p>
        </li>
        @endforeach
    </ul>
    <div class="container mx-auto px-4 mt-8 w-90 ">
        <div class="mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class=" grid grid-cols-2" >
                <!-- Colonne de gauche -->
                <div class="px-6 py-8 border-r border-gray-200">
                    <div class="text-center mb-6">
                        <h1 class="text-4xl font-bold text-red-600 mb-2">EVENTO</h1>
                        <p class="text-gray-600">Ticket d'événement</p>
                    </div>
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold mb-2">Informations sur l'événement :</h3>
                        <p class="text-gray-700">Titre : {{ $reservation->event->title }}</p>
                        <p class="text-gray-700">Date : {{ $reservation->event->date }}</p>
                        <p class="text-gray-700">Lieu : {{ $reservation->event->location }}</p>
                        <!-- Ajoutez d'autres informations sur l'événement ici -->
                    </div>
                    <div class="mb-6">
                        <h3 class="text-xl font-semibold mb-2">Votre réservation :</h3>
                        <p class="text-gray-700">Numéro de réservation : {{ $reservation->numero_reservation }}</p>
                        <p class="text-gray-700">Votre nom : {{ Auth::user()->name }}</p>
                        <!-- Ajoutez d'autres détails de réservation ici -->
                    </div>
                    <div class="text-center text-gray-600 text-sm">© 2024. Tous droits réservés.</div>
                </div>
                <!-- Colonne de droite -->
                <div class="px-6 py-8 flex items-center justify-center">
                    <div class="bg-red-600 text-white py-8 px-12 rounded-full shadow-xl">
                        <h2 class="text-3xl font-bold mb-2">{{ $reservation->numero_reservation }}</h2>
                        <p class="text-lg">Votre numéro de réservation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>