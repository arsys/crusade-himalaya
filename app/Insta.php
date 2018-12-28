<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insta extends Model
{
    protected $table = 'instas';
    protected $fillable = ['thumb_link','standard_link','caption'];
    public $timestamps = false;
}
