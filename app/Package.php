<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table='packages';
    protected $fillable=['packageName','price','channels','sd_quality','hd_quality'];
}
