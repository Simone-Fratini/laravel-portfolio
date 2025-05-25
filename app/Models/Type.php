<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    // Relazione: un Type ha molti Projects
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
