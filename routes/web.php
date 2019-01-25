<?php

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

Route::get('/', 'HomeController@welkom');
Route::get('/complain', 'ComplainController@index');
Route::get('/disclaimer', 'DisclaimerController@index');
Route::get('/faq', 'FAQController@index');
Route::get('/info', 'InfoController@index');


// Route::get('/info', function () {
//     return view('info');
// });

// Route::get('/overzicht', function () {
//     return view('overzicht');
// });

// Route::get('/faq', function () {
//     return view('faq');
// });

// *Route::get('/contact', function () {
//     return view('contact');
// });*

// Route::get('/disclaimer', function () {
//     return view('disclaimer');
// });

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

// Route::post('contact', 'ContactController@showForm')name('contact.show');

// Route::get('overzicht', function () {
//     $klachten = [
//         new Klacht('1234AB', 'klacht', 'klacht1'),
//         new Klacht('4567QW', 'klacht2', 'klacht2')
//     ];

//     return view('jaep', ['klachten' => $klachten]);
// });

class Klacht {
    public $postcode;
    public $categorie;
    public $omschrijving;

    public function __construct($postcode, $categorie, $omschrijving) {
        $this->postcode = $postcode;
        $this->categorie = $categorie;
        $this->omschrijving = $omschrijving;
    }
}