<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Product;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        $products = Product::all();
        return view('comment.index', compact('comments', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('comment.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required |min:5|max:250',
            'description' => 'required |min:15|max:250',
            'product_id' => 'required',
        ]);
        $comment = new Comment;
        $comment->title = $request->title;
        $comment->description = $request->description;
        $comment->product_id = $request->product_id;
        $comment->save();
        return redirect()->route('comment.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $comment = Comment::find($id);
        $products = Product::all();
        return view('comment.edit', compact('comment', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required |min:5|max:250',
            'description' => 'required |min:15|max:250',
            'product_id' => 'required',
        ]);
        $comment = Comment::find($request->id);
        $comment->title = $request->title;
        $comment->description = $request->description;
        $comment->product_id = $request->product_id;
        $comment->save();

        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('comment.index');
    }
}
