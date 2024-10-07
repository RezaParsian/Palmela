@extends('layouts.main')

@section('content')
    <section id="content" class="py-36">
        <div class="container mx-auto px-3 md:px-0">
            <form method="post" class="bg-white rounded md:w-1/3 mx-auto p-4 md:p-12">
                @csrf
                <div class="border-b">
                    <h3 class="font-Hel_Bld text-palmela-800 mb-6 text-[40px]">Login</h3>
                </div>

                <div class="my-3">
                    <label for="email" class="font-Hel_Med text-[18px] text-palmela-800">Your Email</label>

                    <input type="email" name="email" placeholder="Your Email Here" id="email" class="mt-3" required>

                    @error('email')
                    <small class="text-rose-500">{{$message}}</small>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="email" class="font-Hel_Med text-[18px] text-palmela-800">Your Password</label>

                    <input type="password" name="password" placeholder="Your Password Here" id="email" class="mt-3" required>

                    @error('password')
                    <small class="text-rose-500">{{$message}}</small>
                    @enderror
                </div>

                <button class="rounded-lg bg-palmela-400 w-full p-3 font-semibold text-sm my-6 hover:bg-palmela-100 hover:text-palmela-900">
                    Login
                </button>
            </form>
        </div>
    </section>
@endsection
