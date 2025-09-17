@extends('layouts.app')

@section('content')
    <div class="page-content bg-light">
        <section class="px-4">
            <div class="row align-center-center">

                <!-- Left side -->
                <div class="col-xxl-6 lg:w-1/2 w-full relative bg-[#0faaba]/50 z-1
                         after:content-[''] after:absolute after:bottom-0 after:left-[16%] 
                         after:w-[51%] after:h-3/5 after:bg-white after:rounded-t-full after:z-[-2] start-side-content">

                    <div class="dz-bnr-inr-entry">
                        <h1 class="xl:text-4.5xl md:text-4xl sm:text-3xl text-2xl mb-2">My Account</h1>
                        <nav class="mb-4">
                            <ul>
                                <li class="mr-[3px] inline-block text-base font-medium">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="mr-[3px] pl-2 inline-block text-base font-medium 
                                                                       before:content-['\f105'] before:font-['Font_Awesome_5_Free'] 
                                                                       before:font-bold before:pr-3">
                                    My Account
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="text-right relative -z-1 m-auto -mt-[90px] max-3xl:mt-0 registration-media">
                        <img src="{{ asset('assets/images/registration/pic3.png') }}" alt="login">
                    </div>
                </div>

                <!-- Right side form -->
                <div class="col-xxl-6 lg:w-1/2 w-full flex flex-col end-side-content">
                    <div
                        class="p-20 max-w-[522px] m-auto rounded-3.5xl border border-secondary w-full max-xl:p-7.5 max-sm:!p-3.6">

                        <h2 class="mb-2 text-center md:text-2.5xl text-2xl">Login</h2>
                        <p class="text-center mb-7.5">Welcome, please login to your account</p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-7.5">
                                <label for="email" class="block font-medium mb-1.1">Email Address</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                                    class="w-full py-4 px-5 h-13.5 outline-none rounded-xl border border-black bg-white duration-500 focus:bg-light">
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3.6">
                                <label for="password" class="block font-medium mb-1.1">Password</label>
                                <div class="relative z-1">
                                    <input id="password" type="password" name="password" required
                                        class="w-full py-4 px-5 h-13.5 outline-none rounded-xl border border-black bg-white duration-500 focus:bg-light dz-password"
                                        placeholder="Password">
                                    <div
                                        class="cursor-pointer absolute right-0 top-1/2 [transform:translate(-20%,-50%)] flex items-center justify-center w-10 h-auto">
                                        <i class="fa-regular fa-eye"></i>
                                    </div>
                                </div>
                                @error('password')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Remember + Forgot -->
                            <div class="form-row flex justify-between mb-7.5">
                                <div>
                                    <input type="checkbox" name="remember" id="remember_me" class="form-check-input">
                                    <label for="remember_me">Remember Me</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <div>
                                        <a class="text-primary" href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                @endif
                            </div>

                            <!-- Submit -->
                            <div class="text-center">
                                <button type="submit"
                                    class="btn py-3 px-7.5 text-base inline-block font-medium border border-secondary bg-secondary text-white rounded-xl duration-700 uppercase mr-2">
                                    Sign In
                                </button>
                                <a href="{{ route('register') }}"
                                    class="btn py-3 px-7.5 text-base inline-block font-medium border border-secondary hover:bg-secondary hover:text-white rounded-xl duration-700 uppercase">
                                    Register
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection