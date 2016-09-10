<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $fillable = ['bio','basic_info'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
