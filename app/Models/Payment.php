<?php

namespace App\Models;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   protected $table = 'payment';
   protected $primaryKey = 'id';
   protected $fillable = ['enrollment_id', 'paid_date', 'amount'];

   public function enrollment()
   {
      return $this->belongsTo(Enrollment::class);
   }

   use HasFactory;
}
