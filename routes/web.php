<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProjectDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(get_setting_value('_theme_landing') . '.index');
})->name('home');

Route::get('/project', [ProjectDetailController::class, 'index'])->name('project-list');
Route::get('/project/{slug}', [ProjectDetailController::class, 'detail'])->name('project-details');

Route::post('/send-mail', [MailController::class, 'maildata'])->name('send_mail');
