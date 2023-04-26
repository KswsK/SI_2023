
{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    --}}{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--@include('layouts/navigation')--}}
{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Moje obiekty') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}


{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</x-app-layout>--}}
{{--</body>--}}
{{--</html>--}}
@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach ($facilities as $facilitie)
                <li><p class="text-lg "> <a href="/structures/{{$facilitie->id}}">{{$facilitie->name}}</a> </p></li>

            @endforeach
        </div>
    </div>


@endsection
