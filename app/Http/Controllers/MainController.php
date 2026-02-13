<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $latestPosts = Post::query()
            ->where('is_published', true)
            ->with(['categories', 'media'])
            ->latest('published_at')
            ->limit(6)
            ->get();

        return view('index', [
            'latestPosts' => $latestPosts,
        ]);
    }

    public function blog()
    {
        $posts = Post::query()
            ->where('is_published', true)
            ->with(['categories', 'media'])
            ->latest('published_at')
            ->paginate(12);

        $categories = Category::query()
            ->whereHas('posts', fn ($query) => $query->where('is_published', true))
            ->get();

        return view('front.blog', [
            'posts' => $posts,
            'categories' => $categories,
            'featuredPost' => $posts->first(),
        ]);
    }

    public function show(string $locale, $slug)
    {

        $post = Post::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with(['categories', 'media'])
            ->first();

        if (! $post) {
            return back()->with('error', 'Post not found.');
        }

        $relatedPosts = Post::query()
            ->where('is_published', true)
            ->where('id', '!=', $post->id)
            ->whereHas('categories', fn ($query) => $query->whereIn('categories.id', $post->categories->pluck('id')))
            ->with(['categories', 'media'])
            ->latest('published_at')
            ->limit(5)
            ->get();

        $categories = Category::query()
            ->whereHas('posts', fn ($query) => $query->where('is_published', true))
            ->get();

        return view('front.blog-post', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
            'categories' => $categories,
        ]);
    }
}
