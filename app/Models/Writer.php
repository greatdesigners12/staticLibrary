<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Writer extends Model
{
    use HasFactory;

    protected $fillable = ["name", "contact", "image_name"];
    protected $table = "writer";
    public function books() {
        return $this->hasMany(Book::class);
    }

//    public static function showWriter($id){
//         foreach(self::$writers as $writer){
//             if($writer["id"] == $id){
//                 return $writer;
//             }
//         }
//    }

}
