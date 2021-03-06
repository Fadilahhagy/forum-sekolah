<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\User;
use App\Post;
use Auth;

class NotificationController extends Controller
{
    public function get() 
    {
            $notification = Auth::user()->unreadNotifications;
            return $notification;
    }
    public function read(Request $request)
    {
        Auth::user()->unreadNotifications()->find($request->id)->MarkAsRead();
        return 'success';
    }
}
