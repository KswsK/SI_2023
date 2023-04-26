@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <p class="text-lg ">
                {{"Obiekt: $facilities->name"}}
            </p>
            <p class="text-lg ">
                {{"Kierownik: $facilities->szefu"}}
            </p>
            <p class="text-lg ">
                {{"Adres: $facilities->adress"}}
            </p>
            <p class="text-lg ">
                {{"Telefon: $facilities->phone"}}
            </p>
        </div>
    </div>


@endsection

