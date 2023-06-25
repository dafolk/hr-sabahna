<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "duration"
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class, "project_teams", "project_id", "team_id");
    }
}
