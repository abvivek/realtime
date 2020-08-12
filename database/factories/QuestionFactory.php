<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Question;
use Faker\Generator as Faker;

use App\User;
use App\Category;

$factory->define(Question::class, function (Faker $faker) {
    
	$title = $faker->sentence;
    return [
        

        'title' =>  $title,
        'slug' => str::slug($title),
        'body' =>$faker->text,
        'category_id' => function(){
        	return Category::all()->random();
        },
        'user_id' => function(){
        	return User::all()->random();
        }

    ];
});
