<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    protected $fillable = [
        'fname',
        'lname',
        'address',
        'birthdate'
    ];
    use HasFactory;
}
