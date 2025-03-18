<?php

use App\Http\Controllers\ActorController;


Route::get('/', function () {
    return redirect()->route('actors.index');
});

Route::resource('actors', ActorController::class);
