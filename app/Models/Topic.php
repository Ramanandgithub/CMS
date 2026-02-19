<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Topic extends Model
{
    protected $table = 'topics';
    protected $fillable = [
        'title',
        'slug',
        'description',
        'subject_id',
        'is_active',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // protected $casts = [
    //     'is_active' => 'boolean',
    // ];

}
