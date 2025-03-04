<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='chapters';
    protected $fillable=[
       'title',
       'sort_order',
       'course_id'

        
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class)->orderBy('sort_order');
    }
}
