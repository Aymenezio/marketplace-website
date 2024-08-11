@extends('layouts.layout')
@vite('resources/css/app.css')
@section('content')
<div class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-24">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                    <img class="w-full h-full object-cover rounded-xl" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                </div>
                <div class="flex -mx-2 mb-4">
                    <div class="w-full px-2">
                        <button class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Send Message</button>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">{{ $item->name }}</h1>
               
                <div class="flex mb-4 mt-5">
                    <div class="mr-4">
                        <span class="font-bold text-gray-700 dark:text-gray-300 text-3xl">{{ $item->price }}<span class="text-green-500 ml-2">MAD</span></span>
                        
                    </div>
                   
                </div>
                <div class="mt-5">
                    <span class="font-bold text-gray-700 dark:text-gray-300 "><span class="text-blue-500">Condition:</span></span>
                    <p class="text-gray-600 dark:text-gray-300 text-xl mt-2 bg-blue-500 rounded p-2 w-28 text-center">
                        {{ $item->condition }}
                    </p>
                </div>
                <div class="mt-5">
                    <span class="font-bold text-gray-700 dark:text-gray-300"><span class="text-red-500">Gategory:</span></span>
                    <p class="text-gray-600 dark:text-gray-300 text-xl mt-2 bg-red-500 rounded p-2 w-48 text-center">
                        {{ $item->category }}
                    </p>
                </div>
                
                <div class="mt-5">
                    <span class="font-bold text-gray-700 dark:text-gray-300"><span class="text-white">Product Description:</span></span>
                    <p class="text-gray-600 dark:text-gray-300 text-xl mt-2">
                        {{ $item->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        document.getElementById('dropdownMenu').classList.toggle('hidden');
    });
</script>
@endsection