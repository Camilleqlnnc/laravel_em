<?php

use App\Category;
/*
*@author: poplingue
 * @description: liste des étudiants
* */
//
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', 'FrontController@index');

Route::get('single/{post_id}', 'FrontController@showSingle');

//Route::get('test', function(){
//   return Category::find(1)->posts; 
//});

Route::get('category/{category_id}', 'FrontController@showCategory');

Route::get('tag/{tag_id}', 'FrontController@showTag');

Route::controller('dashboard', 'DashboardController');

Route::resource('student', 'StudentController');
Route::resource('post', 'PostController');

Route::get('test', function(){
    dd(DB::table('students')->select('note')->whereBetween('note', array(8,15))->get());
    dd(DB::table('students')->whereNull('note')->get());
    dd(DB::table('students')->where('type', '=', 'dev')
                            ->orWhere(function($query)
                            {
                                $query->where('note', '>', 15)
                                    ->where('status', '=', 'publish');
                            })->get());
    dd(DB::table('students')->avg('note'));



    // class Foo{

    //         protected static $foo='test';

    //         public static function bar()
    //         {
    //                 // self = reference à la classe
    //                 return self::$foo;
    //         }
    // }
    // dd(Foo::bar());
    // return App\Student::current()->get();

});