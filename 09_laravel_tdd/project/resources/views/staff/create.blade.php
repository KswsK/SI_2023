@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="POST" action="{{ route('staff.store') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="login" class="col-sm-2 col-form-label">Login:</label>
                <div class="col-sm-10">
                    <input type="text" name="login" id="login" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="password_confirmation">Confirm Password:</label>
                <div class="col-sm-10">
                    <input type="password" name="password_confirmation" id="password_confirmation">
                </div>
            </div>

            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Role:</label>
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
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>

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
        <label for="login">Enter the login of the user to be deleted:</label>
        <input type="text" name="login" id="login" required>
        <button type="submit">Delete</button>
    </form>


@endsection

