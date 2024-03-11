<x-app-layout>
    <div class="container mx-auto px-4 mt-8">
        <div class="mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="grid grid-cols-2">
                <!-- Colonne de gauche -->
                <div class="relative">
                    <!-- Image de l'événement -->
                    <img src="{{ asset('storage/'.$reservation->event->image_path) }}" alt="Event Image"  class="w-full h-80 object-cover">
                    <!-- Overlay rouge -->
                    <div class="absolute inset-0 bg-red-600 bg-opacity-50 flex flex-col justify-center items-center text-white font-bold">
                        <h1 class="text-4xl mb-2">EVENTO</h1>
                        <p class="text-lg">Ticket d'événement</p>
                    </div>
                </div>
                <!-- Colonne de droite -->
                <div class="px-6 py-8 border-l border-gray-200 flex flex-col justify-between">
                    <!-- Informations sur l'événement -->
                    <p class="text-gray-700 text-4xl font-bold">{{ $reservation->event->title }}</p>
                    <div class="flex justify-around">

                        <p class="text-gray-700">Date : {{ $reservation->event->date }}</p>
                        <p class="text-gray-700">Lieu : {{ $reservation->event->location }}</p>
                    <p class="text-gray-700">N° place : {{ $reservation->numero_place }}</p>

                        <!-- Autres informations sur l'événement -->
                    </div>
                    <!-- Votre réservation -->
                    <div>
                        <h3 class="text-xl font-semibold mt-6 mb-2">Votre réservation :</h3>
                        <div class="flex justify-between">
                            <p class="text-gray-700">Numéro de réservation : {{ $reservation->numero_reservation }}</p>
                            <p class="text-gray-700">Votre nom : {{ Auth::user()->name }}</p>
                        </div>
                        <!-- Autres détails de réservation -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
