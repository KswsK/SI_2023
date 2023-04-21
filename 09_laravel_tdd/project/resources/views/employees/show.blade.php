@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <p class="text-lg ">
                {{"Kierownicy:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 2)
                    <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                @endif
            @endforeach
            <p class="text-lg ">
                {{"Recepcjonistki:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 3)
                    <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                @endif
            @endforeach
            <p class="text-lg ">
                {{"Magazynier:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 4)
                    <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                @endif
            @endforeach
            <p class="text-lg ">
                {{"Księgowa:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 5)
                    <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                @endif
            @endforeach
            <p class="text-lg ">
                {{"Pracownicy:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 1)
                    <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                @endif
            @endforeach
        </div>
    </div>


@endsection

