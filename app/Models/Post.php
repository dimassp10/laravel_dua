<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = "posts";
    protected $primarykey = "id";
    protected $fillable = [
    'id','category_id','title','thumbnail','content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }            

}
