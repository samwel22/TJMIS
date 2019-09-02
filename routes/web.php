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


Route::get('/', function () {
    return view('login');
});

Auth::routes();




Route::group(['middleware'=>'auth'], function(){


Route::get('/home', 'HomeController@index')->name('home');


//Route for download
    Route::get('/ecertificate/download{id}',[
    'uses'=>'PdetailController@download',
    'as'=>'ecertificate.download'
]);


    Route::get('/pcertificate/download{id}',[
    'uses'=>'PdetailController@downloadP',
    'as'=>'pcertificate.download'
]);

    Route::get('/bcertificate/download{id}',[
    'uses'=>'PdetailController@downloadB',
    'as'=>'bcertificate.download'
]);

     Route::get('/cvitae/download{id}',[
    'uses'=>'PdetailController@downloadV',
    'as'=>'cvitae.download'

]);


 Route::get('/pdetail/profile',[
        'uses'=>'PdetailController@index',
        'as'=>'pdetail.profile'
    ]);

    
    
    Route::get('/pdetail/create',[
            'uses'=>'PdetailController@create',
            'as'=>'pdetail.create'
    ]);
    
    
    Route::post('/pdetail/store',[
        'uses'=>'PdetailController@store',
        'as'=>'pdetail.store'
    ]);

    Route::get('/pdetail/edit{id}',[
        'uses'=>'PdetailController@edit',
        'as'=>'pdetail.edit'
    ]);

    Route::get('/pdetail/delete{id}',[
        'uses'=>'PdetailController@destroy',
        'as'=>'pdetail.delete'
    ]);

    Route::post('/pdetail/update{id}',[
        'uses'=>'PdetailController@update',
        'as'=>'pdetail.update'
    ]);


    //manager controller
    Route::get('/manager/index',[
        'uses'=>'ManagerController@index',
        'as'=>'manager.index'
    ]);

    //SoftDelete

     Route::get('/manager/trashed',[
        'uses'=>'ManagerController@trashed',
        'as'=>'manager.trashed'
    ]);

      Route::get('/manager/restore{id}',[
        'uses'=>'ManagerController@restore',
        'as'=>'manager.restore'
    ]); 

    Route::get('/manager/kill{id}',[
        'uses'=>'ManagerController@kill',
        'as'=>'manager.kill'
    ]); 

     //end of SoftDelete

    Route::get('/manager/eback',[
        'uses'=>'ManagerController@eback',
        'as'=>'manager.eback'
    ]);

    Route::get('/manager/dattach',[
        'uses'=>'ManagerController@dattach',
        'as'=>'manager.dattach'
    ]);


    //end

});
