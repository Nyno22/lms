<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'language',
        'flag',
    ];

    public function course(){
        return $this->hasMany(Courses::class, 'lang');
    }
}
