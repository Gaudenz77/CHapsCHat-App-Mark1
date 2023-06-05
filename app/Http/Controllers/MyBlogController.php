<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Blog;

class MyBlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        return response()->json($blogs);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'topic' => 'required|in:general,resources,techtalk',
            'content' => 'required',
        ]);

        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->title = $validatedData['title'];
        $blog->topic = $validatedData['topic'];
        $blog->content = $validatedData['content'];
        $blog->save();

    // Store the feedbackMapId in the session
    session(['blogId' => $blog->id]);

    // If the request expects JSON response, return a JSON message
    if ($request->expectsJson()) {
        return response()->json(['message' => 'Blog-post successfully stored in the database']);
    }

    return redirect()->route('blogosphere.show', $blog->id)
        ->with('success', 'Blog created successfully!');
    }

    public function show(Request $request, $id)
    {
        // Find the blog by ID
        $blog = Blog::findOrFail($id);
        dd($request->all());
        return view('blogosphere.show', compact('blog'));
        /* return redirect()->route('blogosphere.show', ['id' => $blog->id]); */
    }

    public function edit($id)
    {
        // Find the blog by ID
        $blog = Blog::findOrFail($id);

        // If the request expects JSON response, return a JSON message
        if (request()->expectsJson()) {
            return response()->json(['message' => 'JSON response for edit action']);
        }

        return view('blogs.edit', compact('blog'));
        
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'topic' => 'required|in:general,resources,techtalk',
            'content' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $validatedData['title'];
        $blog->topic = $validatedData['topic'];
        $blog->content = $validatedData['content'];
        $blog->save();

        // If the request expects JSON response, return a JSON message
        if ($request->expectsJson()) {
            return response()->json(['message' => 'JSON response for update action']);
        }

        return redirect()->route('blogoSphere.show', $blog->id)
            ->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog && $blog->user_id == auth()->user()->id) {
            $blog->delete();

            // If the request expects JSON response, return a JSON message
            if (request()->expectsJson()) {
                return response()->json(['success' => true]);
            }

            return redirect()->route('blogoSphere.index')
                ->with('success', 'Blog deleted successfully!');
        }

        // If the request expects JSON response, return a JSON message
        if (request()->expectsJson()) {
            return response()->json(['success' => false]);
        }

        return redirect()->route('blogoSphere.index')
            ->with('error', 'Failed to delete blog!');
    }
}
