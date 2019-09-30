<?php

Route::group(['prefix' => 'v1','namespace' => 'API', 'as' => 'api.v1.'], function(){
    Route::apiResource('employees', 'EmployeeController');
});
