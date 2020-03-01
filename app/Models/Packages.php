<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
  protected $table = '_packages';
  protected $primaryKey = 'id';
  public $timestamps = false;
}
