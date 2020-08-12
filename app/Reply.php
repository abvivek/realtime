<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\User;
use App\Like;


class Reply extends Model
{
    //

    public function question(){
    	return $this->belongsTo(Question::class);
    }

    public function user(){

    	return $this->belongsTo(User::class);
    }

    public function like(){

    	return $this->hasMany(Likes::class);
    }
}
