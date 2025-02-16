<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'application_name',
        'tagline',
        'address',
        'city',
        'google_map_embed',
        'phone',
        'email',
        'icon',
        'image',
        'breadcrumb_image',
        'linkedin',
        'youtube',
        'about_us',
        'about_us_image',
        'vision',
        'mission',
        'vision_mission_image'
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            if ($model->isDirty('image')) {
                Storage::disk('public')->delete($model->getOriginal('image'));
            }

            if ($model->isDirty('breadcrumb_image')) {
                Storage::disk('public')->delete($model->getOriginal('breadcrumb_image'));
            }

            if ($model->isDirty('about_us_image')) {
                Storage::disk('public')->delete($model->getOriginal('about_us_image'));
            }

            if ($model->isDirty('vision_mission_image')) {
                Storage::disk('public')->delete($model->getOriginal('vision_mission_image'));
            }
        });

        static::deleting(function ($model) {
            if ($model->image) {
                Storage::disk('public')->delete($model->image);
            }
            if ($model->breadcrumb_image) {
                Storage::disk('public')->delete($model->breadcrumb_image);
            }

            if ($model->about_us_image) {
                Storage::disk('public')->delete($model->about_us_image);
            }

            if ($model->vision_mission_image) {
                Storage::disk('public')->delete($model->vision_mission_image);
            }
        });
    }
}
