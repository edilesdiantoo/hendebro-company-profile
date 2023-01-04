<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Cviebrock\EloquentSluggable\Sluggable;


class ModelMaster extends Model
{
    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    protected $hidden;
}
