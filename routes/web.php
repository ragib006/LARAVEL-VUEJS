<?php

use Illuminate\Support\Facades\Route;




//admin_login_form_action


 Route::get('/dashboard','AdminController@dashboard');









Route::get('/{any}', 'AdminController@dashboard')->where('any', '.*');
