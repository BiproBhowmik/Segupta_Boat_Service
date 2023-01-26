<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{

    protected $table = 'bookings';
    protected $guarded = ['id'];
    public $timestamps = true;

    public function userInfo() :HasOne
    {
        return $this->hasOne(UserInfo::class);
    }
  
    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function package() :BelongsTo
    {
        return $this->belongsTo(Package::class);
    }

    public function payment() :HasOne
    {
        return $this->hasOne(Payment::class);
    }
}
