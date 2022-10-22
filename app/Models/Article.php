<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VanOns\Laraberg\Traits\RendersContent;

class Article extends Model
{
    use RendersContent;

    //
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
    ];

    protected $contentColumn = 'content';

    protected $hidden = [];
}