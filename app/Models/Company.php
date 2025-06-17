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
        'modal_image',
        'title_counter1',
        'title_counter2',
        'title_counter3',
        'note_counter1',
        'note_counter2',
        'note_counter3',                                
        'total_counter1',
        'total_counter2',
        'total_counter3',        
        'show_parallax_info', 
        'parallax_text1',
        'parallax_text2',
        'show_counter_info',
        'about_title1','about_title2','about_title3','about_title4',
        'about_link1','about_link2','about_link3','about_link4'        
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