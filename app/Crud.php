<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
        'meno', 'priezvisko', 'heslo', 'vek'
    ];
}
