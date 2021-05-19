<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $isbn
 * @property string $title
 * @property string $author
 * @property string $cover_image
 */
class Book extends Model
{
    use HasFactory;

    // We track these books using ISBN instead of ID
    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';
}
