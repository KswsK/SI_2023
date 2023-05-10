<!DOCTYPE html>
<html>
<head>
    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
{{--@include('layouts/navigation')--}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nowy produkt') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    @section('content')

        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Add Product') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form method="POST" action="{{ route('products.delete') }}">
                                @csrf
                                <div class="mb-4">
                                    <h2 class="text-lg font-medium text-gray-900">{{ __('Nazwa produktu:') }}</h2>
                                    <x-text-input type="text" name="name" id="name" required/>
                                </div>

                                <div class="mb-4">
                                    <h2 class="text-lg font-medium text-gray-900">{{ __('Ilość:') }}</h2>
                                    <x-text-input type="number" name="qty" id="qty" min="0" required/>
                                </div>

                                <x-primary-button type="submit">{{ __('Usuń produkt') }}</x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endsection

        </x-app-layout>
</x-app-layout>
</body>
</html>
