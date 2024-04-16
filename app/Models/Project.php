<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [

        'nomprojet',
        'filiale',
        'campagne',
        'nbrecasprevu',
       ' qualif',
        'homo',
        'post',
        'nomprojet',
        'budgetprev',
        'budgetreel',
        'gap',
       ' datedeb',
        'datef',

    ];
}
