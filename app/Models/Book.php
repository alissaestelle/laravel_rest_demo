<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $table = 'books';
  protected $fillable = ['title', 'authorID', 'abstract'];

  function authors()
  {
    return $this->belongsTo(Author::class, 'authorID');
  }

  use HasFactory;
}
