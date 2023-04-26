<?php
namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class myObject extends Controller
{
    public function show()
    {
        $facilities = Facility::all();

        if (!auth()->user() || auth()->user()->role !== 2) {
            abort(403);
        }
        return view('kierownik.profil', compact('facilities'));
    }
}
