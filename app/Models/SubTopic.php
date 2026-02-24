<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTopic extends Model
{
    protected $table = 'subtopics';

    protected $fillable = [
        'parent_id',
        'topic_id',
        'title',
        'slug',
        'order_index',
        'description',
        'is_active',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
