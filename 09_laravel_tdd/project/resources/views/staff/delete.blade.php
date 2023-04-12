@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Delete User</h1>
        <form method="POST" action="{{ route('staff.delete', ['login' => $login]) }}">
            @csrf
            @method('DELETE')
            <label for="login">Enter the login of the user to be deleted:</label>
            <input type="text" name="login" id="login" required>
            <button type="submit">Delete</button>
        </form>
    </div>

@endsection

