<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'facilities';

    protected $fillable = [
        'name',
        'facility_nr',
        'phone',
        'adress',
        'miejsca',
        'szefu',
        'zdjecie'
    ];
}
