@extends('layouts.app')

@section('content')
    <div class="page-content bg-light">
        <div class="container py-10">
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Dashboard
                </h2>
                <p class="text-gray-600">
                    You're logged in, {{ Auth::user()->name }}!
                </p>
            </div>
        </div>
    </div>
@endsection