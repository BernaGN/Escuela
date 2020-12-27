<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillables = [
        'code',
        'name',
        'faculty_id',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
