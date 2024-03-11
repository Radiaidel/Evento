<x-app-layout>
    <!-- Contenu du tableau de bord -->
    <div class="grid grid-cols-2 gap-6 p-12">
        <!-- Partie gauche -->
        <div class="col-span-1">
            <div class="bg-white shadow-md p-6 rounded-lg mb-6">
                @if($eventToday)

                <!-- Affichage de l'image de l'événement -->
                <img src="{{ asset('storage/'.$eventToday->image_path) }}" class="mb-4 rounded-lg" alt="Image de l'événement">

                <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $eventToday->title }}</h2>

                <p class="text-red-700 mb-2">Temps restant: {{ $timeLeft }}</p>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <div class="bg-red-400 shadow-md p-4 rounded-lg">
                        <h3 class="text-sm font-semibold mb-2 text-white">Réservations acceptées</h3>
                        <p class="text-gray-700">Nombre : {{ $acceptedReservations }}</p>
                    </div>
                    <div class="bg-red-400 shadow-md p-4 rounded-lg">
                        <h3 class="text-sm font-semibold mb-2 text-white">Lieu</h3>
                        <p class="text-gray-700">{{ $eventToday->location }}</p>
                    </div>
                </div>
                @else
                <p class="text-gray-800">Pas d'événement aujourd'hui</p>
                @endif
            </div>


        </div>
        <div class="col-span-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-green-200 shadow-md p-6 rounded-lg">
                    <h2 class="text-sm font-semibold mb-4 text-green-800">Total des événements acceptés</h2>
                    <p class="text-green-700">{{ $totalAcceptedEvents }}</p>
                </div>
                <div class="bg-yellow-200 shadow-md p-6 rounded-lg">
                    <h2 class="text-sm font-semibold mb-4 text-yellow-800">Total des événements en attente</h2>
                    <p class="text-yellow-700">{{ $totalPendingEvents }}</p>
                </div>
                <div class="bg-red-200 shadow-md p-6 rounded-lg">
                    <h2 class="text-sm font-semibold mb-4 text-red-800">Total des réservations en attente</h2>
                    <p class="text-red-700">{{ $totalPendingReservations }}</p>
                </div>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg mt-6">
                <h2 class="text-xl font-semibold mb-4">Événements des trois prochains jours</h2>
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th class="py-2 text-sm">Titre</th>
                                <th class="py-2 text-sm">Date</th>
                                <th class="py-2 text-sm">Places restantes</th> <!-- Nouvelle colonne -->
                            </tr>
                        </thead>
                        <tbody>
                            @if($eventsNextThreeDays)
                            @foreach($eventsNextThreeDays as $event)
                            <tr>
                                <td class="py-2 text-sm text-center">{{ $event->title }}</td>
                                <td class="py-2 text-sm text-center">{{ $event->date }}</td>
                                <!-- Calcul des places restantes pour chaque événement -->
                                @php
                                $acceptedReservations = $event->reservations()->where('statut', 'accepted')->count();
                                $placesRestantes = $event->nb_available_places - $acceptedReservations;
                                @endphp
                                <td class="py-2 text-sm text-center">{{ $placesRestantes }}</td>
                            </tr>
                            @endforeach
                            @endif

                </div>
            </div>

        </div>
    </div>
</x-app-layout>