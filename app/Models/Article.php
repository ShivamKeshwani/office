<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'slug', 'body'];
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function set_best_comments(){
        $this->best_comment_id = $comment->id;
        return $this->save();
    }
}
