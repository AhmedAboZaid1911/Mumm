<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
class Posts extends Model
{
    protected $fillable = ['title','desc','content','category_id'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
