<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'photo_id',
    ];

    
    public function getImageAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/photos/', $value);
        } else {
            return null;
        }
    }
}
