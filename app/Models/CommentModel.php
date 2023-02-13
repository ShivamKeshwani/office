<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    public function post(){
        return $this->belongsTo(PostModel::class);
    }
}
