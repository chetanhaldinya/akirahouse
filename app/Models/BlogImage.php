<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    use HasFactory;
    protected $timestamp = false;
    protected $fillable = [
        'name',
        'blog_id',
    ];

    
    public function getNameAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/blogs/', $value);
        } else {
            return null;
        }
    }
}
