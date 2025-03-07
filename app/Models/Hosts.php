<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Hosts extends Model
{
  use HasFactory;

  // vincula o host aos seus N dominios
  public function domain() {
    return $this->hasMany(Domains::class);
  }
}
