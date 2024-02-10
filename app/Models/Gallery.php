<?php

namespace App\Models;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'file',
    ];

    public function getFileAttribute($value)
    {
        if ($value) {
            return  FileService::getFileUrl('files/galleries/', $value);
        } else {
            return null;
        }
    }

}
