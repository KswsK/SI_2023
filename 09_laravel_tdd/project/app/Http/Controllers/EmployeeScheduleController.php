<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeScheduleController extends Controller
{
    public function show()
    {
        if (!auth()->user() || auth()->user()->role !== 3) {
            abort(403);
        }

        return view('employeeSchedule.show');
    }
}
