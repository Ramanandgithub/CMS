<?php
namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table    = 'subjects';
    protected $fillable = ['title', 'slug', 'description', 'order_index', 'is_active'];

    public function topics()
    {
        return $this->hasMany(Topic::class, 'subject_id', 'id');
    }
}
