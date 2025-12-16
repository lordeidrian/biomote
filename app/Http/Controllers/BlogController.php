<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\Category;
use App\Models\Tag;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with(['category', 'tags'])
            ->whereNotNull('published_at');

        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->has('category')) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->get('category'));
            });
        }

        if ($request->has('tag')) {
            $query->whereHas('tags', function($q) use ($request) {
                $q->where('slug', $request->get('tag'));
            });
        }

        $posts = $query->orderBy('published_at', 'desc')->paginate(9);

        $categories = Category::withCount('posts')->get();
        $tags = Tag::all();
        $recentPosts = Post::whereNotNull('published_at')
            ->orderBy('published_at', 'desc')
            ->take(5)
            ->get();

        return view('blog.index', compact('posts', 'categories', 'tags', 'recentPosts'));
    }

    public function show($slug)
    {
        $post = Post::with(['category', 'tags'])
            ->where('slug', $slug)
            ->whereNotNull('published_at')
            ->firstOrFail();

        $categories = Category::withCount('posts')->get();
        $tags = Tag::all();
        $recentPosts = Post::whereNotNull('published_at')
            ->where('id', '!=', $post->id)
            ->orderBy('published_at', 'desc')
            ->take(5)
            ->get();

        return view('blog.show', compact('post', 'categories', 'tags', 'recentPosts'));
    }
}
