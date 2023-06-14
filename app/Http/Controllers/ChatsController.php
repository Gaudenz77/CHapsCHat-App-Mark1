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
        /* $this->middleware('auth'); */
    }

    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::latest()->get();
        return view('playground', compact('messages'));
    }

    /**
     * Fetch all messages in ascending order
     *
     * @return Message
     */
    public function fetchMessages()
    {
        return Message::with('user')->orderBy('created_at', 'asc')->get();
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

        /**
     * Delete a message
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
    
        if ($message && $message->user_id == auth()->user()->id) {
            $message->delete();
    
            // If the request expects JSON response, return a JSON message
            if (request()->expectsJson()) {
                return response()->json(['success' => true]);
            }
    
            /* return redirect()->route('playground.index')
                ->with('success', 'Message deleted successfully!'); */
        }
    
        // If the request expects JSON response, return a JSON message
        if (request()->expectsJson()) {
            return response()->json(['success' => false]);
        }
    
        return redirect()->route('playground.index')
            ->with('error', 'Failed to delete message!');
    }

}