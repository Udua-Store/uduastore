@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 space-y-8">
        <h1 class="text-3xl font-bold text-center">Sign Up</h1>
        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring focus:ring-offset-1 focus:ring-cyan-600 focus:border-none outline-none @error('name') is-invalid @enderror">
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring focus:ring-offset-1 focus:ring-cyan-600 focus:border-none outline-none @error('email') is-invalid @enderror">
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring focus:ring-offset-1 focus:ring-cyan-600 focus:border-none outline-none @error('password') is-invalid @enderror">
                @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring focus:ring-offset-1 focus:ring-cyan-600 focus:border-none outline-none">
            </div>
            <button type="submit" class="w-full bg-cyan-600 text-white py-2 rounded-md hover:bg-cyan-700 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-cyan-600">Sign Up</button>
        </form>
        <p class="text-sm text-center text-gray-700">Already have an account? <a href="{{ route('login') }}" class="text-cyan-600 hover:underline">Login</a></p>
    </div>
</div>
@endsection
