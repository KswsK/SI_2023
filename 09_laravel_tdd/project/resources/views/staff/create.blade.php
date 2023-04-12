@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <form method="POST" action="{{ route('staff.store') }}">
            @csrf
            <div class="form-group row">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Name:') }}
                </h2>
                <div>
                    <x-text-input type="text" name="name" id="name" class="mt-1 block w-full"/>
                </div>

            </div>

            <div class="form-group row">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Login:') }}
                </h2>
                <div>
                    <x-text-input type="text" name="login" id="login" class="mt-1 block w-full"/>
                </div>
            </div>

            <div class="form-group row">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Email:') }}
                </h2>
                <div class="col-sm-10">
                    <x-text-input type="email" name="email" id="email" class="mt-1 block w-full"/>
                </div>
            </div>

            <div class="form-group row">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Password:') }}
                </h2>
                <div class="col-sm-10">
                    <x-text-input type="password" name="password" id="password" class="mt-1 block w-full"/>
                </div>
            </div>

            <div class="form-group row">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Confirm Password:') }}
                </h2>
                <div class="col-sm-10">
                    <x-text-input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full"/>
                </div>
            </div>

            <div class="form-group row">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Role:') }}
                </h2>
                <div class="col-sm-10">
                    <select name="role" id="role" class="form-control">
                        <option value="1">Employee</option>
                        <option value="2">Manager</option>
                        <option value="3">Receptionist</option>
                        <option value="4">Warehouseman</option>
                        <option value="5">Accountant </option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="flex items-center gap-4 mt-4">
                    <x-primary-button id="4">{{ __('Create') }}</x-primary-button>
                </div>
            </div>
        </form>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <form method="POST" action="{{ route('staff.delete') }}">
        @csrf
        @method('DELETE')
        <label for="login" class="mt-1 text-sm text-gray-600">Enter the login of the user to be deleted:</label>
        <x-text-input type="text" name="login" id="login" required/>
        <x-primary-button id="4">{{ __('Delete') }}</x-primary-button>
    </form>
    </div>
    </div>


@endsection

