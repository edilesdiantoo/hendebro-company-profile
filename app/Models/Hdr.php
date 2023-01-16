<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hdr extends Model
{
    use HasFactory;
    protected $table = 'hdr_menu';
    protected $guarded = ['id'];
    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }
}
