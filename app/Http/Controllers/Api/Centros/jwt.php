<?php
// v1
Route::prefix('v1')->group(function () {
    Route::resource('/centros', 'Api\Centros\v1\CentrosCrud');
});
