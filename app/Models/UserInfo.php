<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserInfo extends Model
{

    protected $table = 'user_infos';
    protected $guarded = ['id'];
    public $timestamps = true;
    
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

}
