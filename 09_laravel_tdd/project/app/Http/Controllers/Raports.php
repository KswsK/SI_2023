<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Raports extends Controller
{
    public function show()
    {
        if (!auth()->user() || auth()->user()->role !== 5) {
            abort(403);
        }

        return view('raports.show');
    }

}
