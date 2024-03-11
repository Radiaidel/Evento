<x-app-layout>

    <div class="flex flex-wrap -mx-3 mb-5">
        <div class="w-full max-w-full px-3 mb-6  mx-auto">
            <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                    <!-- card header -->
                    <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                        <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                            <span class="mr-3 font-semibold text-dark">Mes Tickets</span>
                        </h3>
                    </div>
                    <!-- end card header -->
                    <!-- card body  -->
                    <div class="flex-auto block py-8 pt-6 px-9">
                        <div class="overflow-x-auto">
                            <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                <thead class="align-bottom">
                                    <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                        <th class="pb-3 text-start min-w-[175px]">Titre de l'événement</th>
                                        <th class="pb-3 text-start min-w-[175px]">Email de l'organisateur</th>
                                        <th class="pb-3 text-start min-w-[100px]">Numéro de réservation</th>
                                        <th class="pb-3 text-start min-w-[100px]">Statut</th>
                                        <th class="pb-3 pr-12  text-start min-w-[150px]">Date de réservation</th>
                                        <th class="pb-3  text-center min-w-[50px]">Détails</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($userTickets as $ticket)
                                    <tr class="border-b border-dashed last:border-b-0">
                                        <td class="p-3 pl-0">
                                            <div class="flex items-center">
                                                <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                    <img src="{{asset('storage/'.$ticket->event->image_path)}}" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                                </div>
                                                <div class="flex flex-col justify-start">
                                                    <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary">{{ $ticket->event->title }}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3 pl-0">
                                            <span class="font-semibold text-light-inverse text-md/normal">{{ $ticket->event->organizer->email }}</span>
                                        </td>
                                        <td class="p-3 pl-0">
                                            <span class="font-semibold text-light-inverse text-md/normal">{{ $ticket->numero_reservation }}</span>
                                        </td>
                                        <td class="p-3 pl-0">
                                            @if($ticket->statut === 'accepted')
                                            <span class="text-center align-baseline inline-flex px-4 py-1 mr-auto items-center font-semibold text-sm text-green-600 bg-green-200 rounded-lg">{{ $ticket->statut }}</span>
                                            @elseif($ticket->statut === 'pending')
                                            <span class="text-center align-baseline inline-flex px-4 py-1 mr-auto items-center font-semibold text-sm text-yellow-600 bg-yellow-200 rounded-lg">{{ $ticket->statut }}</span>
                                            @elseif($ticket->statut === 'rejected')
                                            <span class="text-center align-baseline inline-flex px-4 py-1 mr-auto items-center font-semibold text-sm text-red-600 bg-red-200 rounded-lg">{{ $ticket->statut }}</span>

                                            @endif
                                        </td>
                                        <td class="p-3 pl-0">
                                            <span class="font-semibold text-light-inverse text-md/normal">{{ $ticket->created_at->format('Y-m-d') }}</span>
                                        </td>
                                        <td class="p-3 pl-0">
                                            @if($ticket->statut === 'accepted')
                                            <a href="{{ route('ticket.show', ['reservation' => $ticket->id]) }}" class="text-end">
                                                <span class="text-end align-baseline inline-flex px-4 py-1 ml-2 items-center text-sm text-blue-600">
                                                    Voir ticket
                                                </span>
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>