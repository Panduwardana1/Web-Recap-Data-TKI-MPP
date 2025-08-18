<?php

namespace App\Models;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tki extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tkis';
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
        'destination_id'

    ];

    public function compani() : BelongsTo {
        return $this->belongsTo(Compani::class);
    }

    public function destination() : BelongsTo {
        return $this->belongsTo(Destination::class);
    }

}
