<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;


class Course extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='courses';
    protected $fillable=[
        'name',
        'image',
        'price',
        'description',
        'category_id'

        
    ];
}
