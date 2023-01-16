<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Cviebrock\EloquentSluggable\Sluggable;


class ModelMaster extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'level_user';

    protected $guarded = ['id'];

    // public function level_user()
    // {
    //     return $this->hasMany(User::class);
    // }
}
