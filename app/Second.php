<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Second extends Model
{
 public $table = "second";
                protected $fillable = [
                        'roll','name'
                ];
}
