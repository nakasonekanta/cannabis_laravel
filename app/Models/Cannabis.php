<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cannabis extends Model
{
    use HasFactory;
    protected $table = 'cannabiss';

    protected $fillable = [
        'name',
        'email',
        'tel',
    ];
}
