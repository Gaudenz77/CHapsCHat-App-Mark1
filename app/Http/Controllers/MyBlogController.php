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
    // Find the blog by ID
    $blog = Blog::findOrFail($id);

    // Check if the user is authenticated
    if (!auth()->check()) {
        // If the user is not authenticated, handle the error (e.g., redirect to login page)
        return redirect()->route('login')->with('error', 'You must be logged in to delete a blog post.');
    }

    // Check if the authenticated user is the creator of the blog
    if ($blog->user_id !== auth()->user()->id) {
        // If the user is not the creator of the blog, handle the error (e.g., redirect with error message)
        return redirect()->back()->with('error', 'You are not authorized to delete this blog post.');
    }

    // Delete the blog post
    $blog->delete();

    // If the request expects JSON response, return a JSON message
    if (request()->expectsJson()) {
        return response()->json(['success' => true]);
    }

    return redirect()->route('blogoSphere.index')
        ->with('success', 'Blog deleted successfully!');
}
}
