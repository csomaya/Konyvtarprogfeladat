<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konyvek extends Model
{
    protected $fillable = ['szerzo', 'cim', 'isbn', 'bevdatum', 'selejtdatum', 'kolcson'];
}
