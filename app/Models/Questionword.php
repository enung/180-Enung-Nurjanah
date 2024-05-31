<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionword extends Model
{
    use HasFactory;
    protected $table='questionword';
    protected $fillable=['id','questionword','created_at','updated_at'];

}
