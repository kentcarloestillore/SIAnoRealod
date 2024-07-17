<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function charges(){
        return $this->hasMany(Charge::class);
    }
}
