<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return response()->json(['message'=>'Success', 'data'=>$articles], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validateArticle();
        if ($validator->fails()) {
            return response()->json(['message'=>$validator->messages(), 'data'=>null], 400);
        }
        if (Article::create($validator->validate())) {
            return response()->json(['message'=>'Article Created', 'data'=>$validator->validate()], 200);
        }
        return response()->json(['message'=>'Error occured', 'data'=>null], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return response()->json(['message'=> 'Success','data' => $article], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_comments(Article $article)
    {
        $comments = $article->comments;
        if (count($comments) > 0) {
            return response()->json(['message' => 'Success', 'data' => $comments], 200);
        }
        return response()->json(['message' => 'No Comments Found', 'data' => null], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_best_comment(Article $article)
    {
        $comment = Comment::find($article->best_comment_id);
        return response()->json(['message' => 'Success', 'data'=>$comment], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article->delete()) {
            return response()->json(['message' => 'Article deleted', 'data' =>null], 200);
        }
        return response()->json(['message' => 'Error occured', 'data' =>null], 400);
    }

    public function validateArticle(){
        return Validator::make(request()->all(), [
            'title' => 'required|string|min:3|max:255',
            'slug' => 'required|string|min:3|max:25',
            'body' => 'required|string|min:5|max:255',
        ]);
    }
}
