<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basicword extends Model
{
    use HasFactory;
    protected $table='basicword';
    protected $fillable=['id','basicword','basicwordtype','created_at','updated_at'];

}
