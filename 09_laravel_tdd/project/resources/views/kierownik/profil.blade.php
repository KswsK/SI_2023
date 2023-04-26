
    <!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        #szkola {
            width: auto;
            max-width: 100%;
            height: auto;
            border-radius: 0;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            color: #333;
        }

        th {
            background-color: #6c757d;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e6f7ff;
        }

        img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }
        #1 {
            padding-top: 10cm;
            padding-bottom: 10cm;
        }
    </style>
</head>
<body>
{{--@include('layouts/navigation')--}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil obiektu') }}
        </h2>
    <div>
        <br><br><br><br><br><br><br><br>
        <table>
            <tr>
                <th>Zdjęcie</th>
                <th>Nazwa</th>
                <th>Adres</th>
                <th>Kontakt</th>
                <th>Ilość miejsc</th>
                <th>Numer porządkowy</th>
                <th>Imię i nazwisko dyrektora</th>
            </tr>
            {{--}}@foreach($facilities as $facility)
                <tr>
                    <td><img id="szkola" src="{{$facility->zdjecie}}"></td>
                    <td>{{$facility->phone}}</td>
                    <td>{{$facility->adress}}</td>
                    <td>{{$facility->miejsca}}</td>
                    <td>{{$facility->facility_nr}}</td>
                    <td>{{$facility->szefu}}</td>
                </tr>
            @endforeach--}}
            <tr>
                <td><img id="szkola" src="https://cdn.galleries.smcloud.net/t/galleries/gf-vrYV-BrSg-sbrx_szkola-podstawowa-nr-341-przy-olawskiej-3-na-warszawskim-bemowie-664x442.jpg"></td>
                <td>Facility 2</td>
                <td>Makowa 145c</td>
                <td>987654321</td>
                <td>180</td>
                <td>2</td>
                <td>Jan Piotr</td>
            </tr>
        </table>
    </div>
        <br><br><br><br><br><br><br>
    </x-slot>
</x-app-layout>
</body>
</html>

