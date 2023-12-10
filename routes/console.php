<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('export:tables', function () {
    $tables = explode(',', env('TABLE_TO_EXPORT'));
    $return_text = app(App\Http\Controllers\CommandController::class)->exportTables($tables);
    $this->comment($return_text);
});

Artisan::command('db:backup', function () {
    $directoryPath = database_path('Laravel');
    if (File::isDirectory($directoryPath)) {
        File::deleteDirectory($directoryPath);
    }
    Artisan::call('backup:run --only-db');
    $this->comment("DB Backup Successful!!");
});
