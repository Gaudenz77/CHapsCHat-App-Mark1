<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyLibrary;

class MyLibraryController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'topic' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $library = new MyLibrary();
        $library->user_id = auth()->user()->id;
        $library->topic = $validatedData['topic'];
        $library->content = $validatedData['content'];
        $library->save();

        return response()->json($library);
    }

    /* public function index()
    {
        $libraries = MyLibrary::where('user_id', auth()->user()->id)->get();

        return view('knowledgeSphere', compact('libraries'));
    } */

        public function index()
    {
        $libraries = MyLibrary::where('user_id', auth()->user()->id)->get();

        return response()->json($libraries);
    }

    public function destroy($id)
    {
        $library = MyLibrary::find($id);
    
        if ($library && $library->user_id == auth()->user()->id) {
            $library->delete();
            return response()->json(['success' => true]);
        }
    
        return response()->json(['success' => false]);
    }

}
