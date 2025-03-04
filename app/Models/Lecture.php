<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\soFtDeletes;


class Lecture extends Model
{
    use HasFactory;
    use soFtDeletes;
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
