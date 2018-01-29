<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class NotificationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $limit = Input::get('limit') ?: 30;

        $type = Input::get('type');
        $notifications = [];
        $user = Auth::user();
        if ($type == 'unread'){
            $notifications = $user->unreadNotifications()->paginate($limit);
            $notifications->markAsRead();
        }else{
            $notifications = $user->notifications()->paginate($limit);
        }

        $notifications->appends(Input::except('page'));

        return view('notifications.index',compact('notifications'));
    }
}
