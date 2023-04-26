<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    public function create()
    {
        // Make sure only authenticated admins can access this page
        if (!auth()->user() || auth()->user()->role !== 0) {
            abort(403);
        }

        return view('staff.create');
    }

    public function store(Request $request)
    {
        // Validation rules for the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|alpha|max:30',
            'login' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:30|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'max:32',
                //'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
                'confirmed',
            ],
            'password_confirmation' => 'required',
            'role' => 'required|numeric|min:1|max:5',
            'facility' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user with the form data
        $user = new User;
        $user->name = $request->input('name');
        $user->login = $request->input('login');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->facility = $request->input('facility');
        $user->save();

        // Redirect the user to the staff with a success message
        return redirect()->route('staff')->with('success', 'User created successfully.');
    }

    public function delete(Request $request)
    {
        $login = $request->input('login');
        $user = User::query()->where('login', $login)->first();
        if ($user) {
            $user->delete();
            return redirect()->route('staff.create')->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('staff.create')->with('error', 'User not found');
        }
    }
}
