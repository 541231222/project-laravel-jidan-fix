<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'id',
        'name',
        'image',
        'description'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

