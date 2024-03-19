<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Baner extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fileble = ['title', 'images', 'caption'];

    // public static function boot () {
    //     static::updating(function($model) {
    //         if($model->Storage::isDirectory('image') && $model->getOriginal('image') !== null) {
    //             Storage::disk('public')->delete($model->getOriginal('image'));
    //         }
    //     });
    // }
}
