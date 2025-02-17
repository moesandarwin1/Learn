<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;


use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='enrolls';
    protected $fillable=[
      'name',
      'phone',
      'image',
      'status',
      'course_id',
      'payment_id',
        
    ];
}
