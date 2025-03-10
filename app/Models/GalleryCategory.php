<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'introduction',
        'index'
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty("title")) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
