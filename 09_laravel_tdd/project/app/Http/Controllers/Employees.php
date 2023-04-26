<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


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

    public function changeRole(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $role = $request->input('role');
            $user->role = $role;
            $user->save();

            return redirect()->back()->with('success', 'Rola użytkownika została zaktualizowana.');
        }

        return redirect()->back()->with('error', 'Nie można znaleźć użytkownika.');
    }


}
