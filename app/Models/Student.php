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
        return $this->belongsTo('App\Models\Career');
    }

    public function scopeFirstHundredRecords($query)
    {
        return $query->where('id', '<=', 100);
    }
}
