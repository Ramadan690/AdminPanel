<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
     protected $fillable = ['Reference','HouseRef','Tenants','Email','status','price','created_at'];
}
