<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTopic extends Model
{
    protected $table = 'subtopics';
    protected $fillable = [
        'topic_id',
        'title',
        'slug',
        'order_index',
        'is_active',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    
}
