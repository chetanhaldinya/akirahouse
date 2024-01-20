<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlatImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'flat_id',
    ];

    
    public function getImageAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/flats/', $value);
        } else {
            return null;
        }
    }
}
