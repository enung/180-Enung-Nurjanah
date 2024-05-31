<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answerkey extends Model
{
    use HasFactory;
    protected $table='answerkey';
    protected $fillable=['id','answerkey','keyword','categoryid','questionwordid','created_at','updated_at'];
}
