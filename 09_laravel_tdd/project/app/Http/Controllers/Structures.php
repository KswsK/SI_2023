<?php

namespace App\Http\Controllers;

class Structures extends Controller
{
    public function show()
    {
        if (!auth()->user() || auth()->user()->role !== 0) {
            abort(403);
        }

        return view('structures.show');
    }
}
