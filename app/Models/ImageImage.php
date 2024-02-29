<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'image_id',
    ];

    
    public function getImageAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/images/', $value);
        } else {
            return null;
        }
    }
}
