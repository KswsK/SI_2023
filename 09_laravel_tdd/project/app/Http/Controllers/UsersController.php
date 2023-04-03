<?php

namespace App\Http\Controllers;

use App\Models\Announcements;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class UsersController extends Controller
{
    public function index(Request $request): View
    {
        $users = User::where('name', '<>', 'Admin')->get();
        if (is_null($request->rate)) {
            $request->rate = 1000;
        }
        return view('badUsers')->with('users', $users)->with('rate', $request->rate);
    }

    public function blocked(string $id): RedirectResponse
    {
        User::where('id', $id)->update(array('blocked'=> true));
        Cache::put('success', 'User Successfully Blocked!', 3);
        return back();
    }

    public function unblocked(string $id): RedirectResponse
    {
        User::where('id', $id)->update(array('blocked'=> false));
        Cache::put('success', 'User Successfully Unblocked!', 3);
        return back();
    }
}
