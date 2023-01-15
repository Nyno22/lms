<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'name',
        'price',
        'lang',
        'description',
        'notes',
        'publish',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class, 'lang');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
