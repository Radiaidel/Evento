<x-app-layout>


    @if(auth()->user()->role == 'admin')
    @include('admin_dashboard')
    
@else
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Event Card 1 -->
        @foreach($events as $event)
        <div class="shadow-lg rounded-lg overflow-hidden">
            <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F676460179%2F12679432051%2F1%2Foriginal.20240117-124314?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C1000%2C500&s=845c1d9bb98151c0fe7f4e8e646b7ebc" alt="Event Image" class="w-full h-64 object-cover">
            <div class="p-4">
                <h2 class="text-xl font-semibold mb-2">{{ $event->title }}</h2>
                <p class="text-gray-600 mb-4">{{ $event->description  }}</p>
                <div class="flex items-center">
                    <i class="mr-1 far fa-calendar-alt"></i>
                    <p class="text-gray-700">{{ $event->date }}</p>
                </div>
                <div class="flex items-center mt-2">
                    <i class="mr-1 far fa-map-marker-alt"></i>
                    <p class="text-gray-700">{{ $event->location }}</p>
                </div>
                <a href="#" class="block bg-blue-500 hover:bg-blue-600 text-white text-center font-semibold py-2 px-4 mt-4 rounded">Details</a>
            </div>
        </div>
        @endforeach
        <!-- Repeat the above card structure for each event card -->
        <!-- Event Card 2 -->
        <!-- Event Card 3 -->
        <!-- Event Card 4 -->
    </div>
    <div class="mt-4">
        {{ $events->links() }}
    </div>
    @endif
</x-app-layout>