<?php

namespace App\Models;

use App\Services\FileService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'slug',
        'title',
        'image', 
        'description', 
        'is_active',
    ];


    public function getImageAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/photos/', $value);
        } else {
            return null;
        }
    }

    public function photo_images()
    {
        return $this->hasMany(PhotoImage::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'maxLength' => 255,
                'method'  => null,
                'separator' => '-',
                'unique' => true,
                'onUpdate' => false,
            ]
        ];
    }
}
