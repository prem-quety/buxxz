@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="text-center mb-20">
        <h1 class="text-6xl font-serif font-bold text-primary mb-6 leading-tight animate-fade-in">
            Curated Stationery Collection
        </h1>
        <p class="text-lg text-muted max-w-2xl mx-auto font-light animate-fade-in-delayed">
            Minimal forms. Premium textures. Everyday tools elevated to timeless essentials.
        </p>
    </section>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-14">
        @php
            $demoImages = [
                'https://monafstores.com/wp-content/uploads/2020/05/Stationery_2.jpg',
                'https://stationers.pk/cdn/shop/articles/7_Must_Have_Student_Stationery_Supplies_In_High_School.jpg?v=1635331870',
                'https://bucket.pk/wp-content/uploads/2024/07/2.jpg',
                'https://cdn.shopify.com/s/files/1/0253/7911/0974/files/Stationery_Items_1024x1024.jpg?v=1632306479',
                'https://static.vecteezy.com/system/resources/previews/008/244/026/non_2x/cute-different-stationery-items-vector.jpg',
            ];
        @endphp

        @for ($i = 0; $i < 9; $i++) <!-- Render 9 cards just for showcase -->
            @php
                $img = $demoImages[array_rand($demoImages)];
            @endphp

            <div
                class="group relative rounded-3xl overflow-hidden bg-background border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500">
                <!-- Product Image -->
                <div class="relative">
                    <img src="{{ $img }}" alt="Demo Product {{ $i + 1 }}"
                        class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-700 ease-out">

                    <!-- Floating Price Tag -->
                    <div class="absolute top-4 right-4 bg-secondary text-white text-sm px-4 py-2 rounded-full shadow-md">
                        ${{ rand(10, 50) }}
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6 space-y-3">
                    <h2 class="text-2xl font-serif font-semibold text-primary group-hover:text-secondary transition">
                        Demo Product {{ $i + 1 }}
                    </h2>
                    <p class="text-sm text-muted italic">Signature Edition</p>

                    <a href="#"
                        class="inline-flex items-center justify-center px-6 py-2 rounded-full border border-secondary text-secondary font-medium tracking-wide hover:bg-secondary hover:text-white transition">
                        View Details
                    </a>
                </div>

                <!-- Decorative underline -->
                <div class="absolute bottom-0 left-0 w-0 h-1 bg-secondary group-hover:w-full transition-all duration-500"></div>
            </div>
        @endfor
    </div>
@endsection