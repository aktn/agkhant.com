<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    protected $fillable = ['id','title','description','image'];
}
