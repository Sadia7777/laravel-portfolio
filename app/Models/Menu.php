<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function section(){
        return $this->hasOne(Hero::class);
    }
    public function servicesSections(){
        return $this->hasOne(Servicessection::class);
    }
    protected $fillable = [
        "name",
        "link",
    ] ;
}
