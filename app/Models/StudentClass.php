<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function classType()
    {
        return $this->belongsTo(ClassType::class);
    }
}
