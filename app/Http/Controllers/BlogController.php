<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $posts = Post::orderBy('posts.created_at', 'desc')
        ->limit(3)
        ->get();    

        return view('home' , compact('posts'));    
    }

    public function list()
    {
        $posts = Post::orderBy('posts.created_at', 'desc')
        ->paginate(12);

        return view('list', compact('posts'));  
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where('posts.id', $id)
        ->first();

        $recipe_recode = Post::find($id);
        return view('show' , compact('post') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
