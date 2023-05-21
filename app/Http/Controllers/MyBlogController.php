<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Blog;

class MyBlogController extends Controller
{
/*     public function index()
    {
        $blogs = Blog::where('user_id', auth()->user()->id)->get();
    
        // If the request expects JSON response, return a JSON message
        if (request()->expectsJson()) {
            return response()->json($blogs);
        }
    
        return view('blogs.index', compact('blogs'));
    } */
    public function index()
    {
        $user = auth()->user();
        $blogs = $user->blogs;

        return response()->json($blogs);
    }


    public function create()
    {
        // If the request expects JSON response, return a JSON message
        if (request()->expectsJson()) {
            return response()->json(['message' => 'JSON response for create action']);
        }

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

        // If the request expects JSON response, return a JSON message
        if ($request->expectsJson()) {
            return response()->json(['message' => 'JSON response for store action']);
        }

        return redirect()->route('blogoSphere.show', $blog->id)
            ->with('success', 'Blog created successfully!');
    }

    public function show($id)
    {
        // Find the blog by ID
        $blog = Blog::findOrFail($id);

        return view('blogoSphere.show', compact('blog'));
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
