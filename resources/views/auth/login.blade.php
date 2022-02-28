@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')

    <form action="{{ route('auth::login::submit') }}" method="post">
        @csrf

        <div class="md:w-1/3 md:mx-auto rounded bg-white p-5 my-5">
            <div class="text-lg text-center mb-5">Login</div>

            <div class="mb-3">
                <input type="email" name="email" placeholder="E-mail address" class="w-full rounded border border-gray-300 p-3">
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" name="password" placeholder="Password" class="w-full rounded border border-gray-300 p-3">
            </div>
            <div class="my-3 flex justify-center">
                <button type="submit" class="rounded bg-orange-600 text-orange-50 py-3 px-6">Login</button>
            </div>
            <div class="my-5 text-center">
                <a href="{{ route('auth::register') }}" class="text-orange-500">Don't have account?</a>
            </div>
        </div>
    </form>
@endsection

