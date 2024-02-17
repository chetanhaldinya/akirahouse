<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'meta_title',
        'image',
        'description',
        'meta_description',
        'is_active',
    ];

    
    public function getImageAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/blogs/', $value);
        } else {
            return null;
        }
    }
}
