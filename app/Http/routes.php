<?php

use App\Post;
use App\Tag;
use App\Video;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function(){
   return "andyyyy";
});



