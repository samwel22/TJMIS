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

 //manage users
     Route::get('/user',[
        'uses'=>'UserController@index',
        'as'=>'user'
    ]);

      Route::get('/user/delete{id}',[
        'uses'=>'UserController@destroy',
        'as'=>'user.delete'
    ]);

//end of manage users
      //Start of permision route
    Route::get('/permissions/index',[
        'uses'=>'PermissionController@index',
        'as'=>'permissions.index'
    ]);

    
    
    Route::get('/permissions/create',[
            'uses'=>'PermissionController@create',
            'as'=>'permissions.create'
    ]);
    
    
    Route::post('/permissions/store',[
        'uses'=>'PermissionController@store',
        'as'=>'permissions.store'
    ]);

    Route::get('/permissions/edit{id}',[
        'uses'=>'PermissionController@edit',
        'as'=>'permissions.edit'
    ]);

    Route::get('/permissions/destroy{id}',[
        'uses'=>'PermissionController@destroy',
        'as'=>'permissions.destroy'
    ]);

    Route::post('/permissions/update{id}',[
        'uses'=>'PermissionController@update',
        'as'=>'permissions.update'
    ]);
    //end of permission route


    //Start of roles route
    Route::get('/roles/index',[
        'uses'=>'RoleController@index',
        'as'=>'roles.index'
    ]);

    
    
    Route::get('/roles/create',[
            'uses'=>'RoleController@create',
            'as'=>'roles.create'
    ]);
    
    
    Route::post('/roles/store',[
        'uses'=>'RoleController@store',
        'as'=>'roles.store'
    ]);

    Route::get('/roles/edit{id}',[
        'uses'=>'RoleController@edit',
        'as'=>'roles.edit'
    ]);

    Route::get('/roles/destroy{id}',[
        'uses'=>'RoleController@destroy',
        'as'=>'roles.destroy'
    ]);

    Route::post('/roles/update{id}',[
        'uses'=>'RoleController@update',
        'as'=>'roles.update'
    ]);
    //end of roles route
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


    //start of school profile
    Route::get('/school/index',[
        'uses'=>'MschoolController@index',
        'as'=>'school.index'
    ]);

    Route::get('/school/profile',[
        'uses'=>'SchoolController@index',
        'as'=>'school.profile'
    ]);

    Route::get('/school/teacherslist',[
        'uses'=>'SchoolController@teacherslist',
        'as'=>'school.teacherslist'
    ]);

    
    
    Route::get('/school/create',[
            'uses'=>'SchoolController@create',
            'as'=>'school.create'
    ]);
    
    
    Route::post('/school/store',[
        'uses'=>'SchoolController@store',
        'as'=>'school.store'
    ]);

    Route::get('/school/edit{id}',[
        'uses'=>'SchoolController@edit',
        'as'=>'school.edit'
    ]);

    Route::get('/school/delete{id}',[
        'uses'=>'SchoolController@destroy',
        'as'=>'school.delete'
    ]);

    Route::post('/school/update{id}',[
        'uses'=>'SchoolController@update',
        'as'=>'school.update'
    ]);

    //end of school profile


    //start of teacher request
    Route::get('/trequest/index',[
            'uses'=>'TrequestController@index',
            'as'=>'trequest.index'
    ]);

    Route::get('/trequest/trequest',[
            'uses'=>'ManagerController@trequest',
            'as'=>'trequest.trequest'
    ]);
    
    

    Route::get('/trequest/create',[
            'uses'=>'TrequestController@create',
            'as'=>'trequest.create'
    ]);
    
    
    Route::post('/trequest/store',[
        'uses'=>'TrequestController@store',
        'as'=>'trequest.store'
    ]);

    //end of teacher request

    //TJMIS teachers replay start
    Route::get('/manager/treplay',[
        'uses'=>'ManagerController@create',
        'as'=>'manager.treplay'
    ]);


    Route::post('/manager/store',[
        'uses'=>'ManagerController@store',
        'as'=>'manager.store'
    ]);

    Route::get('/home',[
        'uses'=>'ManagerController@home',
        'as'=>'home'
    ]);

    //end TJMIS teachers replay 

		//test routes
    

     Route::get('/test/qns',[
        'uses'=>'QuestionController@create',
        'as'=>'test.qns'
    ]);

     Route::post('/qns/store',[
        'uses'=>'QuestionController@store',
        'as'=>'qns.store'
    ]);

      Route::get('/test/index',[
        'uses'=>'QuestionController@index',
        'as'=>'test.index'
    ]);

    Route::get('/test/manage',[
        'uses'=>'QuestionController@show',
        'as'=>'test.manage'
    ]);

    Route::get('/test/edit{id}',[
        'uses'=>'QuestionController@edit',
        'as'=>'test.edit'
    ]);

    Route::post('/test/update{id}',[
        'uses'=>'QuestionController@update',
        'as'=>'test.update'
    ]);

    Route::post('/index/store',[
        'uses'=>'AnswerController@store',
        'as'=>'index.store'
    ]);

    Route::get('/test/result',[
        'uses'=>'AnswerController@index',
        'as'=>'test.result'
    ]);

 //end of test routes



});
