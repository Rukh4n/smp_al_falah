<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    use HasFactory;
protected $guarded = ['id'];
    protected $filable = ['title', 'images', 'description'];

    protected static function boo(){
        parent::boot();
        static::updating(function($model) {
            if($model->isDirty('images') && ($model->getOriginal('images') !==null )){
                Storage::disk('public')->delete($model->getOriginal('images'));
            }
        });
    }

}
