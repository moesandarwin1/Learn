<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\soFtDeletes;

class Payment extends Model
{
    use HasFactory;
    use soFtDeletes;
    protected $table='payments';
    protected $fillable=[
        'name',
        'logo',
        'account_name',
        'account_number',
        
    ];
}
