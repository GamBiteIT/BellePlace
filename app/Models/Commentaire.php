<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = ['commentaire','post_id','username'];
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
