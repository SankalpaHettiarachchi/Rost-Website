<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    protected $fillable = [
        'album_name', 'description', 'upload_date',
    ];
}
