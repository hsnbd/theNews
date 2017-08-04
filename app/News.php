<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['categories_id', 'title', 'news_file_link', 'news_link', 'img_link'];
}
