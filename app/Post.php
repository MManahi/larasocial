<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['post_title','post_body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function attachment(){
        return $this->hasOne('App\Attachment');

    }

    public function comments(){
       return $this->hasMany('App\Comment','type_id');
    }
}
