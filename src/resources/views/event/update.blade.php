<x-app-layout>
    <div class="m-8  bg-white p-6 rounded-md shadow-md">
        <form action="{{ route('event.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="hidden" name="event_id" value="{{$event->id}}">

            <div>
                    <label for="current_image" class="block text-gray-700 font-bold mb-2">Current Image:</label>
                    <img src="{{ asset('storage/' . $event->image_path) }}" alt="Current Event Image" class="w-full  h-36 border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <div>
                    <label for="image_path" class="block text-gray-700 font-bold mb-2">Image:</label>
                    <input type="file" name="image_path" id="image_path" accept="image/*" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                </div> 
                <div>
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                    <input type="text" value="{{ $event->title }}" name="title" id="title" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
                
                <div>
                    <label for="date" class="block text-gray-700 font-bold mb-2">Date:</label>
                    <input type="datetime-local" value="{{ $event->date }}" id="date" name="date" min="{{ date('Y-m-d\TH:i', strtotime('+1 minute')) }}"class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500"  required>
                </div>
                <div>
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                    <textarea name="description" id="description" rows="4" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">{{ $event->description }}</textarea>
                </div>
                <div>
                    <label for="location" class="block text-gray-700 font-bold mb-2">Location:</label>
                    <input type="text" name="location" value="{{ $event->location }}" id="location" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <div>
                    <label for="reservation_mode" class="block text-gray-700 font-bold mb-2">Reservation Mode:</label>
                    <select name="reservation_mode" id="reservation_mode" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                        <option value="auto" {{ $event->reservation_mode == 'auto' ? 'selected' : '' }}>auto</option>
                        <option value="manual" {{ $event->reservation_mode == 'manual' ? 'selected' : '' }}>manual</option>
                    </select>
                </div>
                <div>
                    <label for="categorie_id" class="block text-gray-700 font-bold mb-2">Category:</label>
                    <select name="categorie_id" id="categorie_id" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $event->categorie_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
                    <input type="number" name="price" value="{{ $event->price }}" id="price" step="0.01" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <div>
                    <label for="nb_available_places" class="block text-gray-700 font-bold mb-2">Available Places:</label>
                    <input type="number" name="nb_available_places" value="{{ $event->nb_available_places }}" id="nb_available_places" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
               
                
            </div>
            <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:bg-red-600 mt-8 float-right">Update Event</button>
        </form>
    </div>
</x-app-layout>
