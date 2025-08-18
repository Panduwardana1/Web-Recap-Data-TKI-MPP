<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
   use HasFactory, SoftDeletes;
   protected $table = 'destinations';
   protected $fillable = ['country_name'];

   public function tki() : HasMany{
    return $this->hasMany(Tki::class);
   }

}
