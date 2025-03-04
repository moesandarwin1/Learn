<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\soFtDeletes;


class Category extends Model
{
    use HasFactory;
    use soFtDeletes;
    protected $table='categories';
    protected $fillable=[
        'name',
        
    ];
    
}
