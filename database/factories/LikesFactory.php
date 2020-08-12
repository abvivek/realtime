<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Likes;
use Faker\Generator as Faker;
use App\Question;

use App\User;

$factory->define(Likes::class, function (Faker $faker) {
    return [
        'user_id' => function(){
        	return User::all()->random();
        }
    ];
});
