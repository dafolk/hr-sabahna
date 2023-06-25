<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, "project_teams", "project_id", "team_id");
    }
}
