<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-800">
    
@extends('layouts.layout')
@section('content')
<div class="bg-white border rounded-lg px-8 py-6 mx-auto max-w-2xl my-28 shadow-2xl">
    <h2 class="text-2xl font-medium mb-4">Add Product</h2>
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" id="name" name="name"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
            <textarea id="description" name="description"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                rows="5" required></textarea>
        </div>
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-medium mb-2">Category</label>
            <select name="category" id="category" class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
            required>
                <option value="">Select Category</option>
                <option value="Electronics">Electronics</option>
                <option value="Clothing &amp; Accessories">Clothing &amp; Accessories</option>
                <option value="Home &amp; Furniture">Home &amp; Furniture</option>
                <option value="Books &amp; Media">Books &amp; Media</option>
                <option value="Health &amp; Beauty">Health &amp; Beauty</option>
                <option value="Toys &amp; Baby Products">Toys &amp; Baby Products</option>
                <option value="Sports &amp; Outdoors">Sports &amp; Outdoors</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="item-condition" class="block text-gray-700 font-medium mb-2">Condition</label>
            <select name="condition" id="item-condition" class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
            required>
                <option value="">Select condition</option>
                <option value="new">New</option>
                <option value="like new">Like new</option>
                <option value="used">Used</option>
                <option value="good">Good</option>
                <option value="acceptable">Acceptable</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-medium mb-2">Price (MAD)</label>
            <input type="number" id="price" name="price"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                step="0.01" required>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium mb-2">Image</label>
            <input type="file" id="image" name="image"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400">
        </div>
        <div class="mb-4">
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        document.getElementById('dropdownMenu').classList.toggle('hidden');
    });
</script>
@endsection
</body>
</html>