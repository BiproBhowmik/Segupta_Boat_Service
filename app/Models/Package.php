<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{

    protected $table = 'packages';
    public $timestamps = true;
    protected $guarded = ['id'];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

}
