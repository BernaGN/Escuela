<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculties';

    protected $fillables = [
        'code',
        'name',
    ];

    public function careers() {
        return $this->hasMany(Career::class);
    }
}
