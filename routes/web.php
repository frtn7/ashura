<?php

Auth::routes();

Route::get('/{any}', 'AppController@index')->name('any', '.*');
