<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentBlock extends Model
{
    protected $fillable = [
        'page_id',
        'block_type',
        'block_data',
        'order_index',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }   
}
