<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;

class Subject extends Model
{
    protected $fillable = ['title', 'description'];

    public function topics()
    {
        return $this->hasMany(Topic::class, 'subject_id', 'id');
    }
}
