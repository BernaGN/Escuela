<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillables = [
        'code',
        'name',
        'lastname',
        'birthday',
        'career_id',
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function scopeFirstRecords($query, $num)
    {
        return $query->where('id', '<=', $num);
    }
}
