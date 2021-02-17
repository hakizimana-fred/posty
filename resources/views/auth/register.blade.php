@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" value="{{ old('name')}}" name="name" id="name" placeholder="your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">

                @error('name')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" value="{{ old('username')}}" name="username" id="username" placeholder="your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                @error('username')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" value="{{ old('email')}}" name="email" id="email" placeholder="your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">

                @error('email')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="confirmed" class="sr-only">Password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>

        </form>
    </div>
</div>
@endsection