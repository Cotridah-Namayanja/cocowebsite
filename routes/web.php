<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function (){
    return view('about');
})->name('aboutus');

Route::get('/contact-us', function (){
    return view('contact-us');
})->name('contact');

Route::get('/about/{person_name}',function($person_name){
    echo $person_name;
})->name('about.person');