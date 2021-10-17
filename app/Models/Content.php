<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'slug',
        'link',
        'title',
        'rendered',  
        'post_title',
        'post_name',
        'media', 
        'content',        
    ];
}
