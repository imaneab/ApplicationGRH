<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('menu');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/help', function () {
    return view('help');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/modifier', function () {
    return view('modifier');
});
/*Route::get('/valider', function () {
    return view('conges.valider');
});*/
Route::get('/register', function () {
    return view('auth.register');
});



/*Route::get('/conge', function () {
    return view('success');
});*/

Route::get('/gestion', function () {
    return view('gestion');
});
Route::get('/cong', function () {
    return view('cong');
});
Route::get('/aut', function () {
    return view('aut');
});
Route::get('/attestation', function () {
    return view('attestation');
});
Route::get('/yes', function () {
    return view('yescong');
});
Route::get('/yesaut', function () {
    return view('yesaut');
});

Route::get('/sup', function () {
    return view('sup');
});


Route::get('/menu', function () {
    return view('menu');
});
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/menu', 'MainController@menu');
Route::get('/main/logout', 'MainController@logout');

Route::auth();
Route::resource('fonctionnaire','FonctionnaireController');
Route::resource('utilisateur','UtilisateurController');

Route::get('/home', 'HomeController@index');
//Route::get('/test', function () {
  //  return view('test');
//});
//Route::get('/search','SearchController@index');
//Route::get('/chercher',array('as'=>'chercher','uses'=>'SearchController@chercher'));

Route::get('/a', function () {
    return view('a');
});

Route::get('/searchcontent', 'FonctionnaireController@searchcontent');
Route::get('/search', 'FonctionnaireController@search');
Route::get('/searchcon', 'FonctionnaireController@searchcon');
Route::get('/searchaut', 'FonctionnaireController@searchaut');
Route::get('/searchatt', 'FonctionnaireController@searchatt');
Route::get('/searchconge', 'CongeController@searchconge');
Route::get('/searchautorisation', 'AutorisationController@searchautorisation');
Route::get('/searchyes', 'CongeController@searchyes');
Route::get('/searchyesaut', 'AutorisationController@searchyesaut');
Route::get('/searchsup', 'FonctionnaireController@searchsup');
Route::get('/chercher', 'FonctionnaireController@chercher');
Route::get('/success', 'FonctionnaireController@success');
Route::resource('conge','CongeController');
Route::resource('autorisation','AutorisationController');
Route::resource('editcon','CongeController@mod');
Route::resource('editaut','AutorisationController@mod');
Route::resource('edituser','UtilisateurController@mod');
Route::resource('/valider','CongeController@valider');
//Route::resource('/val','CongeController@val');
Route::get('/upload','UploadController@index');
Route::post('/store','UploadController@store');

Route::get('/show','UploadController@showall');
Route::get('viewAlldownloadfile','DownloadController@downfunc');
Route::post('valider_conge','CongeController@aide');
Route::post('valider_autorisation','AutorisationController@help');
