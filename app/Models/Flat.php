<?php

namespace App\Models;

use App\Services\FileService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'slug',
        'title',
        'owner_id',
        'size',
        'amount',
        'bed_room', 
        'bath_room', 
        'max_guest', 
        'youtube_url', 
        'image', 
        'short_description', 
        'long_description',
        'is_active',
    ];


    public function getImageAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/flats/', $value);
        } else {
            return null;
        }
    }

    public function flat_images()
    {
        return $this->hasMany(FlatImage::class);
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
