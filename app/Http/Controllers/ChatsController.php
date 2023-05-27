<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $messages = Message::orderBy('created_at', 'desc')->get();

        /* return view('playground', compact('feedbackMaps')); */
        return view('playground');
    }

    /**
     * Fetch all messages in reverse order
     *
     * @return Message
     */
    public function fetchMessages()
    {
        return Message::with('user')->orderBy('created_at', 'desc')->get();
    }

    
    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

    

        broadcast(new MessageSent($user, $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }

}