<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
      
    public function patients(){
        return $this->hasMany(Patient::class, 'doctor_id', 'id');
    }

    public function manypatients(){
        return $this->belongsToMany(Patient::class);
    }
    
}
