<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use App\Models\CommentModel;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function index(){
        $post = Post::find(1);

$comment = new Comment;
$comment->comment = "Hi ItSolutionStuff.com";

$post = $post->comments()->save($comment);

        // $post = PostModel::find(1);

        $comment2 = new CommentModel;
        $comment2->comments = "Hi ItSolutionStuff.com Comment 2";

     $post = $comment2->save();
 dd($post);
        $comments = $post->comments;

        dd($comments);
    }

}
