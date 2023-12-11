<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Systems extends Model
{
    use HasFactory;
    protected $table = 'systems';
    protected $fillable= [
        'name',
        'description',
        ];
}
