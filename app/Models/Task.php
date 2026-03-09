<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use softDeletes, hasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
    ];
}
