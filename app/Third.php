<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Third extends Model
{
 public $table = "third";
                protected $fillable = [
                        'roll','name'
                ];
}
