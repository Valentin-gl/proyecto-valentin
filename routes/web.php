<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

   $user= App\usuario::findOrFail(1);
    return $user->usuario;
});
