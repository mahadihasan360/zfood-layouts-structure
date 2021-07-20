<?php

use Illuminate\Support\Facades\Route;

/**
 * home
 */
Route::get("/",function(){
    return view("zfood.home");
});

/**
 * menu
 */
Route::get("/menu",function(){
    return view("zfood.menu");
});

/**
 * location
 */
Route::get("/location",function(){
    return view("zfood.location");
});

/**
 * blog
 */
Route::get("/blog",function(){
    return view("zfood.blog");
});

/**
 * reservation
 */
Route::get("/reservation",function(){
    return view("zfood.reservation");
});

/**
 * staff
 */
Route::get("/staff",function(){
    return view("zfood.staff");
});

/**
 * news
 */
Route::get("/news",function(){
    return view("zfood.news");
});

/**
 * gallery
 */
Route::get("/gallery",function(){
    return view("zfood.gallery");
});

