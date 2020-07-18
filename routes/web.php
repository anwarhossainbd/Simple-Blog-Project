<?php




Route::get('/',[

    'uses' => 'Frontend\FrontenController@index',
    'as'=> 'front'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-us',[

    'uses' => 'Frontend\FrontenController@aboutUs',
    'as'=> 'About.Us'
]);

Route::get('/contact-us',[

    'uses' => 'Frontend\FrontenController@contactUs',
    'as'=> 'Contact.Us'
]);

Route::get('/frontpage-mission',[

    'uses' => 'Frontend\FrontenController@frontpage_mission',
    'as'=> 'frontpage.mission'
]);


Route::post('/contact_form',[

    'uses' => 'Frontend\FrontenController@contact_form',
    'as'=> 'contact_form'
]);


Route::get('/frontpage-vision',[

    'uses' => 'Frontend\FrontenController@frontpage_vision',
    'as'=> 'frontpage.vission'
]);




Route::get('/frontpage.news',[

    'uses' => 'Frontend\FrontenController@frontpage_news',
    'as'=> 'frontpage.news'
]);



Route::get('/frontend_details/{id}',[

    'uses' => 'Frontend\FrontenController@details',
    'as'=> 'frontend_details'
]);


Route::get('/delete/{id}',[
    'uses' => 'Backend\NewsEventController@delete',
    'as'=> 'news_events.delete'
]);



Route::group(['middleware' => ['login']], function () {

    Route::prefix('users')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\Usercontroller@view',
            'as'=> 'users.view'
        ]);



        Route::get('/add',[
            'uses' => 'Backend\Usercontroller@add',
            'as'=> 'users.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\Usercontroller@store',
            'as'=> 'users.store'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\Usercontroller@edit',
            'as'=> 'users.edit'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\Usercontroller@update',
            'as'=> 'users.update'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\Usercontroller@delete',
            'as'=> 'users.delete'
        ]);

    });

    Route::prefix('Profile')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\ProfileController@view',
            'as'=> 'profiles.view'
        ]);

        Route::get('/edit',[
            'uses' => 'Backend\ProfileController@edit',
            'as'=> 'profiles.edit'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\ProfileController@update',
            'as'=> 'profiles.update'
        ]);

        Route::get('/password/change',[
            'uses' => 'Backend\ProfileController@passwordChange',
            'as'=> 'profiles.password.change'
        ]);

        Route::post('/password/update',[
            'uses' => 'Backend\ProfileController@passwordUpdate',
            'as'=> 'profiles.password.Update'
        ]);

    });

    Route::prefix('logos')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\LogoController@view',
            'as'=> 'logos.view'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\LogoController@edit',
            'as'=> 'logos.edit'
        ]);

        Route::get('/add',[
            'uses' => 'Backend\LogoController@add',
            'as'=> 'logos.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\LogoController@store',
            'as'=> 'logos.store'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\LogoController@delete',
            'as'=> 'logos.delete'
        ]);


        Route::post('/update',[
            'uses' => 'Backend\LogoController@update',
            'as'=> 'logos.update'
        ]);

    });

    Route::prefix('sliders')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\SliderController@view',
            'as'=> 'sliders.view'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\SliderController@edit',
            'as'=> 'sliders.edit'
        ]);

        Route::get('/add',[
            'uses' => 'Backend\SliderController@add',
            'as'=> 'sliders.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\SliderController@store',
            'as'=> 'sliders.store'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\SliderController@delete',
            'as'=> 'sliders.delete'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\SliderController@update',
            'as'=> 'sliders.update'
        ]);


    });

    Route::prefix('missions')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\MissionController@view',
            'as'=> 'missions.view'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\MissionController@edit',
            'as'=> 'missions.edit'
        ]);

        Route::get('/add',[
            'uses' => 'Backend\MissionController@add',
            'as'=> 'missions.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\MissionController@store',
            'as'=> 'missions.store'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\MissionController@delete',
            'as'=> 'missions.delete'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\MissionController@update',
            'as'=> 'missions.update'
        ]);


    });

    Route::prefix('Vission')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\VissionController@view',
            'as'=> 'vission.view'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\VissionController@edit',
            'as'=> 'vission.edit'
        ]);

        Route::get('/add',[
            'uses' => 'Backend\VissionController@add',
            'as'=> 'vission.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\VissionController@store',
            'as'=> 'vission.store'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\VissionController@delete',
            'as'=> 'vission.delete'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\VissionController@update',
            'as'=> 'vission.update'
        ]);


    });

    Route::prefix('News_events')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\NewsEventController@view',
            'as'=> 'news_events.view'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\NewsEventController@edit',
            'as'=> 'news_events.edit'
        ]);

        Route::get('/add',[
            'uses' => 'Backend\NewsEventController@add',
            'as'=> 'news_events.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\NewsEventController@store',
            'as'=> 'news_events.store'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\NewsEventController@delete',
            'as'=> 'news_events.delete'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\NewsEventController@update',
            'as'=> 'news_events.update'
        ]);


    });

    Route::prefix('Services')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\ServicesController@view',
            'as'=> 'services.view'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\ServicesController@edit',
            'as'=> 'services.edit'
        ]);

        Route::get('/add',[
            'uses' => 'Backend\ServicesController@add',
            'as'=> 'services.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\ServicesController@store',
            'as'=> 'services.store'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\ServicesController@delete',
            'as'=> 'services.delete'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\ServicesController@update',
            'as'=> 'services.update'
        ]);


    });

    Route::prefix('contact')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\ContactController@view',
            'as'=> 'contact.view'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\ContactController@edit',
            'as'=> 'contact.edit'
        ]);

        Route::get('/add',[
            'uses' => 'Backend\ContactController@add',
            'as'=> 'contact.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\ContactController@store',
            'as'=> 'contact.store'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\ContactController@delete',
            'as'=> 'contact.delete'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\ContactController@update',
            'as'=> 'contact.update'
        ]);


    });

    Route::prefix('About-Us')->group(function () {

        Route::get('/view',[
            'uses' => 'Backend\AboutController@view',
            'as'=> 'about.view'
        ]);

        Route::get('/edit/{id}',[
            'uses' => 'Backend\AboutController@edit',
            'as'=> 'about.edit'
        ]);

        Route::get('/add',[
            'uses' => 'Backend\AboutController@add',
            'as'=> 'about.add'
        ]);

        Route::post('/store',[
            'uses' => 'Backend\AboutController@store',
            'as'=> 'about.store'
        ]);

        Route::get('/delete/{id}',[
            'uses' => 'Backend\AboutController@delete',
            'as'=> 'about.delete'
        ]);

        Route::post('/update',[
            'uses' => 'Backend\AboutController@update',
            'as'=> 'about.update'
        ]);


    });


});







