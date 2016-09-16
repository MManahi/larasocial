<?php

namespace App;

    use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function replies(){
        return $this->hasMany(Comment::class , 'type_id')->where('type','comment');
    }

}
