<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DigitalArt extends Model
{
    protected $table = 'digital_art';

    protected $fillable = [
        'title',
        'artist',
        'resolution',
        'price',
        'image',
        'software_used',
    ];
}
