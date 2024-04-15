<?php

namespace App\Http\Controllers;

use App\Models\NotificationLog;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class NotificationLogController extends Controller
{

    public function store(Request $request)
    {
        try {
            User::with('notificationTypes')->whereHas('notificationCategories', function ($query) use ($request) {
                $query->where('user_notification_categories.notification_category_id', $request->input('notification_category_id'));
            })->get()->each(function ($user) use ($request) {

                $user->notificationTypes->each(function ($type) use ($user, $request) {

                    NotificationLog::create([
                        'user_id' => $user->id,
                        'notification_category_id' => $request->input('notification_category_id'),
                        'notification_type_id' => $type->notification_type_id,
                        'message' => $request->input('message'),
                    ]);
                });
            });

            $notifications = NotificationLog::with(['user', 'notificationCategories', 'notificationTypes'])->orderBy('created_at', 'desc')->get();

            return view('welcome', ['notifications' => $notifications]);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Ocurrió un error al enviar las notificaciones. Por favor, inténtalo de nuevo']);
        }
    }
}
