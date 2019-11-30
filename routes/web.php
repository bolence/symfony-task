<?php

Route::get('circle/{radius}', 'CircleController@calculate_radius');
Route::get('triangle/{a}/{b}/{c}', 'TriangleController@calculate_surface');
