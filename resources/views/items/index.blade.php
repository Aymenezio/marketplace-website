@extends('layouts.layout')
@vite('resources/css/app.css')
@section('content')

<section>
    <div class="mx-auto mt-16 max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <header>
        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>
  
        <p class="mt-4 max-w-md text-gray-500">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
          dicta incidunt est ipsam, officia dolor fugit natus?
        </p>
      </header>
  
      <div class="mt-8 sm:flex sm:items-center sm:justify-between">
        
  
        
        <!-- search bar -->
        <form action="{{ route('items.index') }}" method="GET">
          <input type="text" name="search" placeholder="Search items..." value="{{ request('search') }}" class="border-none outline-none focus:border-none focus:ring-0 font-semibold">
          <button type="submit" class="text-white bg-green-600 p-2 rounded-lg">Search</button>
      </form>
        
      </div>
      <div class="container flex flex-wrap -mx-4 mt-5">
        @foreach ($items as $item)
        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4 px-4 mb-8">
            <div class="relative flex w-full">
                <div class="max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                    <a class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl" href="">
                        <img class="object-cover" src="{{ asset('storage/' . $item->image) }}" alt="product image" width="100%" height="100%"/>
                    </a>
                    <div class="mt-4 px-5 pb-5">
                        
                            <h5 class="text-xl tracking-tight text-slate-900 font-bold">{{ $item->name }}</h5>
                        
                        <div class="flex justify-between mt-2">
                            <h6 class="text-sm tracking-tight text-white bg-red-500 w-20 rounded text-center mt-2 truncate p-1">{{ $item->category }}</h6>
                            <h6 class="text-sm tracking-tight text-white bg-blue-500 w-20 rounded text-center mt-2 ml-3 truncate p-1">{{ $item->condition }}</h6>
                            <h6 class="text-sm tracking-tight text-white w-20 rounded text-center mt-2"></h6>
                        </div>
                        <div class="mt-2 mb-5 flex items-center justify-between">
                            <p class="text-3xl font-bold text-slate-900">
                                {{ $item->price }}<span class="text-green-500 ml-3">MAD</span>
                            </p>
                        </div>
                        <a href="{{ route('items.description', ['item_id' => $item->item_id]) }}" class="flex items-center justify-center rounded-md bg-slate-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Check Item
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    <div class="flex items-center py-8">
      @if ($items->onFirstPage())
          
      @else
          <a href="{{ $items->previousPageUrl() }}"
              class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center px-10">
              Previous
          </a>
      @endif

      @for ($i = 1; $i <= $items->lastPage(); $i++)
          @if ($i == $items->currentPage())
              <span class="h-10 w-10 bg-blue-800 font-semibold text-white text-sm flex items-center justify-center">{{ $i }}</span>
          @else
              <a href="{{ $items->url($i) }}"
                  class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">
                  {{ $i }}
              </a>
          @endif
      @endfor

      @if ($items->hasMorePages())
          <a href="{{ $items->nextPageUrl() }}"
              class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">
              Next
          </a>
      @else
          <span class="h-10 w-10 bg-gray-300 font-semibold text-gray-500 text-sm flex items-center justify-center">
              Next
          </span>
      @endif
  </div>

  </section>
@endsection
    
@section('scripts')
<script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        document.getElementById('dropdownMenu').classList.toggle('hidden');
    });
</script>
@endsection