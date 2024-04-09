<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that should be hidden for arrays and JSON output.
     *
     * @var array
     */
    protected $hidden = ['updated_at'];
    protected $dateFormat = 'd, l F Y';
    protected $casts = [
        'status' => 'boolean',
    ];
}
