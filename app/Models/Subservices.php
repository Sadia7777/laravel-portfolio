<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subservices extends Model
{
    use HasFactory;
    public function subservice(){
        return $this->belongsTo(Servicessection::class);
    }
    protected $fillable = [
        "servicessection_id",
        "image",
        "title",
        "description",
        "list_item",
    ] ;
}
