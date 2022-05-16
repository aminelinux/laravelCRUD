@extends('layouts.app')
    @section('content') 
        <!-- Bg indigo -->
    <div class="max-w-screen-lg bg-indigo-300 shadow-2xl rounded-lg mx-auto text-center py-12 mt-4">
        <h2 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
            {{$title}}
        </h2>
        <p>This the Laravel APP from The formation Amine Hamdi</p>
        <div class="mt-8 flex justify-center">
            <div class="flex rounded-md bg-white shadow">
                <a href="#" class="text-gray-700 font-bold py-2 px-6">
                    Login
                </a>
            </div>
            <div class="flex rounded-md bg-white shadow">
                <a href="#" class="text-gray-700 font-bold py-2 px-6">
                    Register
                </a>
            </div>
        </div>
    </div>
    @endsection