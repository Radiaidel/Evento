<x-app-layout>

    <div class="container mx-auto p-8">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Événement</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Numéro de réservation</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de réservation</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilisateur</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($pendingReservations as $reservation)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->event->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->numero_reservation }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap flex items-center gap-1">
                            <img src="{{asset('storage/'.$reservation->user->profile_photo)}}" alt="" class="h-10 w-10 rounded-full">
                            {{ $reservation->user->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('reservation.accept') }}" method="post" class="inline">
                                @csrf
                                <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">
                                <button type="submit" class="text-green-600 hover:underline mr-2">Accepter</button>
                            </form>
                            <form action="{{ route('reservation.reject') }}" method="post" class="inline">
                                @csrf
                                <input type="hidden" name="reservation_id" value="{{ $reservation->id }}">
                                <button type="submit" class="text-red-600 hover:underline">Refuser</button>
                            </form>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>