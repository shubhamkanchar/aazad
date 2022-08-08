<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImages extends Model
{
    use HasFactory;

    protected $table = 'image';
    protected $connection = 'mysql';

    protected $fillable = [
        'gallery_id',
        'name',
    ];

    public $timestamps = true;
}
