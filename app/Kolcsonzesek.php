<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kolcsonzesek extends Model
{
  protected $fillable = ['tagok_id', 'konyvek_id', 'kolcsondatum', 'lejaratdatum'
}
