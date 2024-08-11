@extends('layouts.layout')
@vite('resources/css/app.css')

@section('content')
    <h1>Your Items</h1>
    @if ($items->isEmpty())
        <p>You have not created any items yet.</p>
    @else
        <div class="container mx-auto mt-16 px-4 py-8">
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4">
                @foreach ($items as $item)
                    <div class="max-w-xs overflow-hidden bg-white shadow-lg rounded-lg mx-auto mb-4">
                        <img class="w-full h-56 object-cover" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                        <div class="px-6 py-4">
                            <h3 class="text-xl font-bold text-gray-800 ">{{ $item->name }}</h3>
                            <p class="text-gray-700 mt-2 font-bold">{{ $item->description }}</p>
                            <p class="text-gray-700 mt-2 font-bold mb-3">Category: <span class="bg-red-500 rounded-md text-white px-2 py-1">{{ $item->category }}</span></p>
                            <p class="text-gray-700 font-bold">Condition: <span class="bg-blue-500 rounded-md text-white px-2 py-1">{{ $item->condition }}</span></p>
                            <p class="text-gray-700 mt-2 font-bold">Price: {{ $item->price }} <span class="text-green-500 font-bold">MAD</span></p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <a href="{{ route('items.edit', ['item_id' => $item->item_id]) }}" class="inline-block bg-yellow-500 text-white px-3 py-1 rounded-full text-xs uppercase font-semibold tracking-wide hover:bg-yellow-600 focus:outline-none focus:bg-yellow-700">
                                Edit
                            </a>
                            <form action="{{ route('items.destroy', ['item' => $item->item_id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-full text-xs uppercase font-semibold tracking-wide hover:bg-red-600 focus:outline-none focus:bg-red-700 ml-2">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
@section('scripts')
<script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        document.getElementById('dropdownMenu').classList.toggle('hidden');
    });
</script>
@endsection