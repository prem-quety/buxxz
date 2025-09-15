@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-96 object-cover">
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>
            <p class="text-lg text-gray-600 mb-6">{{ $product->description }}</p>
            <p class="text-2xl font-bold text-blue-600 mb-4">${{ $product->price }} {{ $product->currency }}</p>
            <p class="text-sm text-gray-500 mb-6">Stock: {{ $product->stock }}</p>
            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Add to Cart
            </button>
        </div>
    </div>
@endsection