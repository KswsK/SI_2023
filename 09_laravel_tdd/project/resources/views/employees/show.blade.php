@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <p class="text-lg ">
                {{"Kierownicy:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 2)
                    <div class="flex items-center space-x-2">
                        <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                        @include('employees.role-dropdown', ['user' => $user])
                    </div>
                @endif
            @endforeach
            <p class="text-lg ">
                {{"Recepcjonistki:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 3)
                    <div class="flex items-center space-x-2">
                        <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                        @include('employees.role-dropdown', ['user' => $user])
                    </div>
                @endif
            @endforeach
            <p class="text-lg ">
                {{"Magazynier:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 4)
                    <div class="flex items-center space-x-2">
                        <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                        @include('employees.role-dropdown', ['user' => $user])
                    </div>
                @endif
            @endforeach
            <p class="text-lg ">
                {{"Księgowa:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 5)
                    <div class="flex items-center space-x-2">
                        <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                        @include('employees.role-dropdown', ['user' => $user])
                    </div>
                @endif
            @endforeach
            <p class="text-lg ">
                {{"Pracownicy:"}}
            </p>
            @foreach ($users as $user)
                @if ($user->role == 1)
                    <div class="flex items-center space-x-2">
                        <li><a href="/employee/{{$user->id}}">{{$user->name}}</a></li>
                        @include('employees.role-dropdown', ['user' => $user])
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection
