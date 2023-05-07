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
            {{ __('Produkty') }}
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="mt-8 mb-8 card">
                        <dl>
                            @foreach($products as $product)
                                @if($product)
                                <div class="flex flex-col pb-3">
                                    <dt class="mt-4 text-gray-500">
                                        id={{$product->id}}, facility_id={{$product->facility_id}}, dir={{$product->facility_dir_name}}
                                    </dt>
                                    <dd class="mb-3 text-base">
                                    {{$product->name}}, ilosc={{$product->qty}}
                                    </dd>
                                    <hr>
                                </div>
                                    @endif
                            @endforeach
                        </dl>
                </div>
            </div>
        </div>
    @endsection

</x-app-layout>
</body>
</html>
