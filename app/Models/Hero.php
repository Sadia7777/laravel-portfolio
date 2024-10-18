<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    public function menu(){
        return $this->belongsTo(Menu::class);
    }
    protected $fillable = [
        "menu_id",
        "title",
        "description",
        "image",
        "sectionId",
        "status",
    ] ;
}
