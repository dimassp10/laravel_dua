<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primarykey = "id";
    protected $fillable = ['id','name','slug'];

    public function post()
    {
        return $this->HasMany(Post::class);
    }       
}
