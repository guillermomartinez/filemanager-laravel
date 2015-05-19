<?php

Route::group(array('middleware' => 'auth'), function(){
    Route::controller('filemanager', 'Pqb\FilemanagerLaravel\Controllers\FilemanagerLaravelController');
});