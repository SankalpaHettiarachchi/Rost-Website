<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $table = 'message';
    protected $fillable = [
        'full_name', 'email', 'message','is_read'
    ];
}
