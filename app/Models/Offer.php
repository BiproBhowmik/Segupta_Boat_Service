<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    protected $table = 'offers';
    protected $guarded = ['id'];
    public $timestamps = true;

}
