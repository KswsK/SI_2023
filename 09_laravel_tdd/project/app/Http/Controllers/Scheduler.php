<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Scheduler extends Controller
{
    public function show()
    {
         if (!auth()->user() || auth()->user()->role !== 1) {
            abort(403);
        }

        return view('scheduler.show');
    }

}
