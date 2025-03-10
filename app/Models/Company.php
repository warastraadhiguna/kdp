<?php

namespace App\Models;

use Carbon\Carbon;
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
        'establishment_date',
        'icon',
        'image',
        'breadcrumb_image',
        'linkedin',
        'youtube',
        'video_link',
        'video_thumbnail_image',
        'about_us',
        'about_us_image',
        'vision',
        'mission',
        'vision_mission_image',
        'parallax_image',
        'team_total',
        'facility_total'
    ];
    protected $casts = [
        'establishment_date' => 'date', // Pastikan ini ada
    ];
    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            $fields = ['image', 'breadcrumb_image', 'about_us_image', 'vision_mission_image', 'parallax_image','video_thumbnail_image'];

            foreach ($fields as $field) {
                if ($model->isDirty($field)) {
                    $oldFile = $model->getOriginal($field);

                    if ($oldFile && Storage::disk('public')->exists($oldFile)) {
                        Storage::disk('public')->delete($oldFile);
                    }
                }
            }
        });

        static::deleting(function ($model) {
            $fields = ['image', 'breadcrumb_image', 'about_us_image', 'vision_mission_image', 'parallax_image','video_thumbnail_image'];

            foreach ($fields as $field) {
                if ($model->$field && Storage::disk('public')->exists($model->$field)) {
                    Storage::disk('public')->delete($model->$field);
                }
            }
        });
    }

    public function getYearsSinceEstablishedAttribute()
    {
        return Carbon::parse($this->establishment_date)->age;
    }
}
