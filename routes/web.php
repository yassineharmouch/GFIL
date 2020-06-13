<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
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
    return view('accueil');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*les routes d'emploi*/
Route::resource('/emplois' , 'EmploiController');
Route::get('/emplois', 'EmploiController@index')->name('emplois.index');
Route::post('/emplois', 'EmploiController@store')->name('emplois.store');
Route::get('/emplois/create_emploi', 'EmploiController@create1')->name('emplois.create1');
Route::get('/emplois/create_seance', 'EmploiController@create2')->name('emplois.create2');
//Route::get('/emplois/download/{file}', 'EmploiController@download');
///Route::get('/emplois/{id}', 'EmploiController@show')->name('emplois.show');
Route::put('/emplois/{id}', 'EmploiController@update')->name('emplois.update');
Route::put('/emplois/{id}/edit', 'EmploiController@edit')->name('emplois.edit');
Route::delete('/emplois/{id}', 'EmploiController@destroy')->name('emplois.destroy');

/*fin*/


/*la route de la notes*/
Route::resource('notes' , 'NoteController');

/*la route pour upload des fichier au dropbox*/
Route::get('/upload','DropboxController@uploadToDropbox');
Route::post('/upload_to_dropbox','DropboxController@uploadToDropboxFile');

/*end */

/*Etudiant Auth route*/
Route::namespace('Etudiant')->group(function(){
    Route::get('/etudiant/home', 'EtudiantController@index')->name('etudiant.home');
    //Route::resource('/etudiant','EtudiantController');
    /*================cvs============*/
    Route::resource('cvs','CvsController');
   
 });
 
/*User Auth route*/
Route::namespace('User')->group(function(){
    Route::get('/user/home', 'UserController@index')->name('user.home');
 });
/*Entreprise Auth route*/
Route::namespace('Entreprise')->group(function(){
    Route::get('/entreprise/home', 'EntrepriseController@index')->name('entreprise.home');
 });
 
/*Enseignant Auth route*/
Route::namespace('Enseignant')->group(function(){
    Route::get('/enseignant/home', 'EnseignantController@index')->name('enseignant.home');
    Route::resource('/etudiant','EtudiantController');
    /*================cours============*/
    Route::resource('cours','CoursController');
    Route::get('/cours', 'CoursController@index')->name('cours.index');
    Route::post('/cours', 'CoursController@store')->name('cours.store');
    Route::get('/cours/create', 'CoursController@create')->name('cours.create');
    Route::get('/cours/download/{file}', 'CoursController@download');
    Route::get('/cours/{id}', 'CoursController@show')->name('cours.show');
    Route::put('/cours/{id}', 'CoursController@update')->name('cours.update');
    Route::put('/cours/{id}/edit', 'CoursController@edit')->name('cours.edit');
    Route::delete('/cours/{id}', 'CoursController@destroy')->name('cours.destroy');


 });
 
/*Admin Auth route
Route::namespace('Admin')->group(function(){
    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/admin/login', 'Auth\LoginController@login');
    Route::get('/admin/home', 'AdminController@index')->name('admin.home');
    //Route::get('/admin/admin', 'AdminController@index')->name('admin.admin');
 });*/

 /**** */
Route::get('/home', function () {
    switch(\Illuminate\Support\Facades\Auth::user()->role_id){
        case 1:
            return redirect('admin');
            break;
        case 2:
            return redirect(route('user.home'));
            break;
        case 3:
            return redirect(route('etudiant.home'));
            break;
        case 4:
                return redirect(route('enseignant.home'));
                break;
        case 5:
            return redirect(route('entreprise.home'));
            break;
        default:
            return '/login';
            break;
    }
});
/*================Messages============*/

Route::get('/messages', 'HomeController@index')->name('home');
Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('/message', 'HomeController@sendMessage');


/*================Annonces============*/
Route::resource('annonce','AnnoncesController');

/*================calendrier============*/

Route::get('/calendrier', 'CalendrierController@index');

/*================offres============*/
Route::resource('offre','OffreController');




