<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insta extends Model
{
    protected $table = 'instas';
    protected $fillable = ['link','caption'];
    public $timestamps = false;
}
