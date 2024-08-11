@vite('resources/css/app.css')
@extends('layouts.layout')
@section('content')
<section class="text-center mt-36 xl:mx-[300px] lg:mx-[300px] md:mx-auto sm:mx-auto xs:mx-auto bg-gradient-to-r from-violet-600 to-indigo-700 text-white rounded-xl p-10 shadow-2xl mb-20">
    <h1 class="text-4xl font-extrabold text-white">We Are</h1>
    <p class="mt-4 text-white text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
    Atque expedita ex recusandae voluptate officiis iusto similique 
    asperiores unde corporis cumque numquam sunt animi voluptatem 
    possimus ipsa dignissimos magni, ullam nesciunt.</p>
</section>
<section class="bg-gray-100">
    <div class="mx-auto py-10 px-4 sm:px-6 lg:px-8 mt-10 bg-gray-800">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">About Us</h2>
                <p class="mt-4 text-gray-400 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis
                    eros at lacus feugiat hendrerit sed ut tortor. Suspendisse et magna quis elit efficitur consequat.
                    Mauris eleifend velit a pretium iaculis. Donec sagittis velit et magna euismod, vel aliquet nulla
                    malesuada. Nunc pharetra massa lectus, a fermentum arcu volutpat vel.</p>
               
            </div>
            <div class="mt-12 md:mt-0 shadow-2xl">
                <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>
<section class="bg-gray-100">
    <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div class="max-w-lg">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Our Mission</h2>
                <p class="mt-4 text-gray-600 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis
                    eros at lacus feugiat hendrerit sed ut tortor. Suspendisse et magna quis elit efficitur consequat.
                    Mauris eleifend velit a pretium iaculis. Donec sagittis velit et magna euismod, vel aliquet nulla
                    malesuada. Nunc pharetra massa lectus, a fermentum arcu volutpat vel.</p>
               
            </div>
            <div class="mt-12 md:mt-0 shadow-2xl">
                <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="About Us Image" class="object-cover rounded-lg shadow-md">
            </div>
        </div>
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