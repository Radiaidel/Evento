<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($users as $user)
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg @if($user->blocked) opacity-50 @endif">
                    <div class="p-6">
                        <div class="tems-center ">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $user->role == 'organizer' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->name }}" class="w-16 h-16 rounded-full">
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <p class="text-lg font-semibold">{{ $user->name }}</p>
                            <p class="text-gray-500">{{ $user->email }}</p>

                            <form action="{{ route('block.user', $user->id) }}" method="POST" class="mt-4">
                                @csrf
                                @if(!$user->blocked)
                                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600">Bloquer</button>
                                @elseif($user->blocked)
                                <button type="submit" class="bg-white text-red-600 shadow py-2 px-4 rounded-md hover:bg-red-600 hover:text-white">Débloquer</button>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if($users->count() == 0)
            <p class="text-center mt-8">Aucun utilisateur trouvé.</p>
            @endif
        </div>
    </div>
</x-app-layout>