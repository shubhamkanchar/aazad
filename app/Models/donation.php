<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    use HasFactory;

    protected $table = 'donation';
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'name_mr',
        'goal',
        'file'
    ];

    public $timestamps = true;
}
