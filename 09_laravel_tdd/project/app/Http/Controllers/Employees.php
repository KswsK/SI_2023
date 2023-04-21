<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class Employees extends Controller
{
    public function show()
    {
         if (!auth()->user() || auth()->user()->role !== 0) {
            abort(403);
        }
        $users = DB::table('users')->get();
        return view('employees.show', ['users' => $users]);
    }

    public function profiles( $id )
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('employees.profile',['user' => $user]);
    }

}
