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

        $blogs->each(function ($blog) {
            $blog->image_url = asset('assets/img/' . $blog->image);
        });

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
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for image upload
        ]);



        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->title = $validatedData['title'];
        $blog->topic = $validatedData['topic'];
        $blog->content = $validatedData['content'];

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            $blog->image = $imageName;
        };

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
    
        // Delete the image file if it exists
        if ($blog->image) {
            $imagePath = public_path('/assets/img/' . $blog->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        // Delete the blog post
        $blog->delete();
    
        // If the request expects JSON response, return a JSON message
        if (request()->expectsJson()) {
            return response()->json(['success' => true]);
        }
    
        return redirect()->route('blogosphere.index')
            ->with('success', 'Blog deleted successfully!');
    }
    
}
