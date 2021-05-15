<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // We track these books using ISBN instead of ID
    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';
}
