<?php

namespace App\Models;

use App\Services\FileService;
// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description', 
        'image', 
        'is_active',
    ];


    public function getImageAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/images/', $value);
        } else {
            return null;
        }
    }

    public function Image_images()
    {
        return $this->hasMany(ImageImage::class);
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title',
    //             'maxLength' => 255,
    //             'method'  => null,
    //             'separator' => '-',
    //             'unique' => true,
    //             'onUpdate' => false,
    //         ]
    //     ];
    // }
}
