<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tki extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'nik',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'address_vilage',
        'district',
        'education',
        'phone',
        'compani_id',
        'destination_id',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function compani()
    {
        return $this->belongsTo(Compani::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
