<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Topic;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['title', 'slug', 'description', 'is_active'];

    public function topics()
    {
        return $this->hasMany(Topic::class, 'subject_id', 'id');
    }
}

