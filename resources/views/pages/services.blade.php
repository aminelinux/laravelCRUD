@extends('layouts.app')
    @section('content')
        <h1>{{$title}}</h1>
        @if (count($services)>0)
            <ul class="divide-y-2 divide-gray-100">
                @foreach ($services as $service)
                <li class="p-3">{{$service}}</li>
                @endforeach
            </ul>
        @endif
        
    @endsection