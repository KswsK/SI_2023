<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
class Structures extends Controller
{
    public function show()
    {
        if (!auth()->user() || auth()->user()->role !== 0) {
            abort(403);
        }
        $facilities = DB::table('facilities')->get();
        return view('structures.show', ['facilities' => $facilities]);
    }

    public function facilities( $id )
    {
        $facilities = DB::table('facilities')->where('id', $id)->first();
        return view('structures.object',['facilities' => $facilities]);
    }
}
