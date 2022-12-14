<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ["title", "synopsis", "coverphoto", "writer_id"];
    use HasFactory;

    public function writer() {
        return $this->belongsTo(Writer::class);
    }
}
