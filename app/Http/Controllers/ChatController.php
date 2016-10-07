<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;

use App\Http\Requests;
use Pusher;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Chat::orderBy('created_at', 'desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app_id = env('PUSHER_APP_ID');
        $app_key = env('PUSHER_KEY');
        $app_secret = env('PUSHER_SECRET');

        $receive = explode('"', file_get_contents('php://input'));
        $chat = new Chat;

        $chat->nickname = $receive[3];
        $chat->message = $receive[7];
        $chat->save();

        $pusherOptions = array(
            'cluster' => 'eu'
        );

        $pusher = new Pusher($app_key, $app_secret, $app_id, $pusherOptions);

        $pusherArray['nickname'] = $receive[3];
        $pusherArray['message'] = $receive[7];

        $pusher->trigger('chat_channel', 'push_messages', $pusherArray);

        return ['success' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chat::destroy($id);

        return array('success' => true);
    }
}
