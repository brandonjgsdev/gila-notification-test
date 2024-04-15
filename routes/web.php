<?php

use App\Http\Controllers\NotificationLogController;
use App\Models\NotificationCategory;
use App\Models\NotificationLog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        $notifications = NotificationLog::with(['user', 'notificationCategories', 'notificationTypes'])->orderBy('created_at', 'desc')->get();
        return view('welcome', ['notifications' => $notifications]);
    } catch (\Throwable $th) {
        return view('welcome', ['notifications' => null])->withErrors(['error' => 'Ocurrió un error al cargar las notificaciones. Por favor, inténtalo de nuevo']);
    }
});

Route::get('/new-message', function () {
    try {
        $categories = NotificationCategory::all();
        return view('new_message', ['categories' => $categories]);
    } catch (\Throwable $th) {
        return view('new_message', ['categories' => null])->withErrors(['error' => 'Ocurrió un error al cargar las categorias. Por favor, inténtalo de nuevo']);
    }
})->name('new-message');

Route::resource('notification-log', NotificationLogController::class);
