<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='enrolls';
    protected $fillable=[

      'note',
      'payment_slip',
      'status',
      'course_id',
      'payment_id',
      'user_id',

    ];


    public function course() {
      return $this->belongsTo(Course::class);
  }

  public function payment() {
      return $this->belongsTo(Payment::class);
  
  }
}
