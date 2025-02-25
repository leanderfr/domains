<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Domains extends Model
{
  protected $fillable = ['domain','expiration_date','host_id'];

  use HasFactory;

  // vincula o dominio ao seu host 
  public function host() {
    return $this->belongsTo(Hosts::class);
  }

}
