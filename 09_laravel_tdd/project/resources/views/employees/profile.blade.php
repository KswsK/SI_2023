@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <p class="text-lg ">
                {{"Imie i nazwisko: $user->name"}}
            </p>
            <p class="text-lg ">
                {{"Rola: $user->role"}}
            </p>
            <p class="text-lg ">
                {{"Obiekt: $user->facility"}}
            </p>
        </div>
    </div>


@endsection

