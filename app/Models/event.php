<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'name_mr',
        'from',
        'to',
        'desc',
        'date',
        'location',
        'link',
        'file',
    ];

    public $timestamps = true;
}
