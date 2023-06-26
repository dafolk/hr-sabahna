<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamEmployee extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'employee_id'
    ];
}
