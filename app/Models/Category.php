<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;


class Category extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='categories';
    protected $fillable=[
        'name',
        
    ];
    
}
