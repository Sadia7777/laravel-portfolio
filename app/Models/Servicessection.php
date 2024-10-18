<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicessection extends Model
{
    use HasFactory;

    public function menu(){
        return $this->belongsTo(Menu::class);
    }
    public function subservicesitem(){
        return $this->hasMany(Subservices::class);
    }
    protected $fillable = [
        "menu_id",
        "title",
        "sub_title",
        "sectionId",
        "status",
    ] ;
}
