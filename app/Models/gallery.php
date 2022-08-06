<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'name_mr',
        'description',
        'description_mr',
        'file',
    ];

    public $timestamps = true;
}
