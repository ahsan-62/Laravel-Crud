<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['id' => 'Home page', 'name' => 'Ahsan Al Bashar']);
})->name('home');

Route::get('/about-us', function () {

    $name = "Ahsan";
    $mobile = "01986112069";
    return view('about', compact('name', 'mobile'));
})->name('about');
Route::get('/contact-page', function (Request $request) {


    // dd(
    //     $request->path(),
    //     $request->is('contact-page'),
    //     $request->ip(),
    //     $request->schemeAndHttpHost(),
    //     $request->cookie(),
    //     $request->bearerToken(),

    // );
    // $mobile = [

    //     '01986112069',
    //     '01996324808',
    //     '01726562839',
    //     '01726562839',
    // ];
    // $mobile = 5;
    // $color = 'red';

    // $products = [
    //     1 => [
    //         'color' => 'Red',
    //         'size' => 'Small',
    //         'price' => '1200',
    //     ],

    //     2 => [
    //         'color' => 'green',
    //         'size' => 'Big',
    //         'price' => '1000',

    //     ],
    // ];

    // $products_count = count($products);

    // return view('contact', compact(
    //     'mobile',
    //     'color',
    //     'products',
    //     'products_count',
    // ));
    $data = [
        'name' => 'ahsan',
        'roll' => '180119'


    ];

    return response($data)
        ->header('Content-Type', 'application/json')
        ->cookie('My_IDCard', 'ahsan', '2');
})->name('contact');


Route::get('/services-page', function () {
    return view('service');
})->name('service');
