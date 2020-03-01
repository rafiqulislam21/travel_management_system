<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $table = '_invoice';
  protected $primaryKey = 'id';
  public $timestamps = false;
}
