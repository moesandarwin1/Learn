<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;


class Order extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='orders';
    protected $fillable=[
        'name',
        'email',
        'phone',
        'payment_slip',
        'course_id',
        'payment_id'
        
    ];
}
