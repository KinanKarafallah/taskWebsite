<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkAsReadController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $userUnreadNotification = auth()->user()
                                  ->unreadNotifications
                                  ->where('id', $id)
                                  ->first();
    
        if($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
        }
     return back();
    }
}
