<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compani extends Model
{
    use HasFactory;

    protected $table = 'companis';

    protected $fillable = ['name', 'address', 'phone'];

    public function tki() : HasMany {
        return $this->hasMany(Tki::class);
    }

}
