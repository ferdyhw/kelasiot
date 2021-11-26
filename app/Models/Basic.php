<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    use HasFactory;

    protected $table = 'basics';
    protected $guarded = ['id'];

    // public function scopeFilter($query)
    // {
    //     if (request('search')) {
    //         return $query->where('title', 'like', '%' . request('search') . '%')
    //             ->orWhere('author', 'like', '%' . request('search') . '%');
    //     }
    // }
}
