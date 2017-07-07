<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class First extends Model
{
 public $table = "first";
                protected $fillable = [
                        'roll','name'
                ];
}
