<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Products extends Controller
{
    public function show()
    {
         if (!auth()->user() || auth()->user()->role !== 4) {
            abort(403);
        }

        return view('products.show');
    }

}
