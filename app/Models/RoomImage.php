<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'room_id',
    ];

    
    public function getImageAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/rooms/', $value);
        } else {
            return null;
        }
    }
}
