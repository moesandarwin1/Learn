<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class Lecture extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='lectures';
    protected $fillable=[
       'title',
       'description',
       'video_url',
       'sort_order',
       'category_id',
       'course_id',
       'chapter_id',

        
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

}
