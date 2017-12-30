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




        
        
Route::group(['middleware'=>'auth'],function(){
        
        Route::get('/', function () {return view('frontpage');});
        Route::get('/notebooks', 'Notebookscontroller@index');
        Route::post('/notebooks', 'Notebookscontroller@store');
        Route::get('/notebooks/create', 'Notebookscontroller@create');
        Route::get('/notebooks/{notebook}', 'Notebookscontroller@show')->name('notebooks.show');
        Route::get('/notebooks/{notebook}/edit', 'Notebookscontroller@edit')->name('notebooks.edit');
        Route::put('/notebooks/{notebook}', 'Notebookscontroller@update');
        Route::delete('/notebooks/{notebook}', 'Notebookscontroller@delete');  
        
       Route::resource('notes','notecontroller');
       Route::get('/profile','usercontroller@profile');
       Route::post('/profile','usercontroller@update_avatar');
       
       Route::get('/pdf/{id}',function($id){
           $pdf=App\note::find($id);
          
           $pdf=PDF::loadView('notes.download',['pdf'=>$pdf]);
           
           return $pdf->download('notes.pdf');
       })->name('notes.pdf');
       // Route::resource('notebooks','Notebookcontroller');
         Route::get('notes/{notebook}/createnote','notecontroller@createnote')->name('notes.createnote');   
});
        

        

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
