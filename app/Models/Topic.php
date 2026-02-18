<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';    
    protected $fillable = ['title', 'description', 'subject_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function subTopics()
    {
        return $this->hasMany(SubTopic::class, 'topic_id', 'id');
    }
}
