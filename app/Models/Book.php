<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table='book';
    protected $primaryKey = 'maloai'; //default id
    protected $keyType = 'string'; //default int
}
