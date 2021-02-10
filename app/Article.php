<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'title', 'description', 'image', 'user_id', 'category_id'
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
