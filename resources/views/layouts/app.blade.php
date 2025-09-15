<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Buxxz Stationery</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Premium Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ url('/') }}" class="text-2xl font-extrabold text-blue-600">Buxxz</a>
            <div class="space-x-6">
                <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600">Home</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">About</a>
                <a href="#" class="text-gray-600 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-gray-300 mt-12">
        <div class="max-w-7xl mx-auto px-6 py-6 flex justify-between items-center">
            <p>&copy; {{ date('Y') }} Buxxz Stationery. All rights reserved.</p>
            <p class="text-sm">Premium stationery for modern professionals.</p>
        </div>
    </footer>

</body>

</html>