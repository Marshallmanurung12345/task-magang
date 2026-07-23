<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cookie;

class NewsController extends Controller
{
    /**
     * Display a listing of news on the public website home page.
     */
    public function home(Request $request)
    {
        $search = $request->query('search');

        $news = News::query()
            ->when($search, function ($query, $search) {
                return $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', '%' . $search . '%')
                      ->orWhere('content', 'like', '%' . $search . '%');
                });
            })
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view('home', compact('news'));
    }

    /**
     * Display the specified news on public detail page.
     */
    public function show(News $news)
    {
        $cookieName = 'news_viewed_' . $news->id;

        // Check if user has already viewed this news using cookie
        if (!Cookie::has($cookieName)) {
            $news->increment('view_count');
            // Set cookie for 24 hours (1440 minutes)
            Cookie::queue($cookieName, 'true', 1440);
        }

        return view('news.show', compact('news'));
    }

    /**
     * Display a listing of the resource for Admin CMS.
     */
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required|string',
        ]);

        // Generate unique slug
        $slug = Str::slug($request->title);
        $originalSlug = $slug;
        $counter = 1;
        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Upload Thumbnail
        $path = $request->file('thumbnail')->store('news', 'public');

        News::create([
            'title' => $request->title,
            'slug' => $slug,
            'thumbnail' => $path,
            'content' => $request->content,
            'view_count' => 0,
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diterbitkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required|string',
        ]);

        // Update slug if title changed
        if ($request->title !== $news->title) {
            $slug = Str::slug($request->title);
            $originalSlug = $slug;
            $counter = 1;
            while (News::where('slug', $slug)->where('id', '!=', $news->id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $news->slug = $slug;
        }

        // Check if new thumbnail is uploaded
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if it exists
            if ($news->thumbnail) {
                Storage::disk('public')->delete($news->thumbnail);
            }
            // Store new thumbnail
            $path = $request->file('thumbnail')->store('news', 'public');
            $news->thumbnail = $path;
        }

        $news->title = $request->title;
        $news->content = $request->content;
        $news->save();

        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        // Delete thumbnail file
        if ($news->thumbnail) {
            Storage::disk('public')->delete($news->thumbnail);
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');
    }
}
