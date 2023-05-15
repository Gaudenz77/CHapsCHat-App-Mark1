<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyLibrary;

class MyLibraryController extends Controller
{
        /**
     * Show the form for editing a resource.
     */
    public function store(Request $request)
    {
        $myLibrary = MyLibrary::create([
            'user_id' => auth()->user()->id,
            'topic' => $request->input('topic'),
            'content' => $request->input('content'),
        ]);
    
        return redirect()->route('knowledgeSphere');
    }
        
    
    /**
     * Delete an item from the mylibrary table
     */
    public function destroy($id)
    {
        $myLibrary = MyLibrary::findOrFail($id);
        $myLibrary->delete();

        return redirect()->route('mylibrary.index');
    }

    /**
     * Show all items in the mylibrary table
     */
    public function index()
    {
        $myLibrary = MyLibrary::where('user_id', auth()->user()->id)->get(); // assuming you are using authentication
        return view('mylibrary.index', ['myLibrary' => $myLibrary]);
    }

    /**
     * 
     */
    public function search(Request $request)
    {
        $search = $request->input('search');
        $myLibrary = MyLibrary::where('user_id', auth()->user()->id)
                               ->where('topic', 'LIKE', '%' . $search . '%')
                               ->orWhere('content', 'LIKE', '%' . $search . '%')
                               ->get(); // assuming you are using authentication
        return view('mylibrary.index', ['myLibrary' => $myLibrary]);
    }
}
