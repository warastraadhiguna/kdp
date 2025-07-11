<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_category_id',
        'name',
        'scope',
        'location',
        'owner_id',
        'client_id',
        'schedule',
        'image',
        'index',
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            $fields = ['image'];

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
            $fields = ['image', 'breadcrumb_image', 'about_us_image', 'vision_mission_image', 'parallax_image'];

            foreach ($fields as $field) {
                if ($model->$field && Storage::disk('public')->exists($model->$field)) {
                    Storage::disk('public')->delete($model->$field);
                }
            }
        });
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    public function projectDetails()
    {
        return $this->hasMany(ProjectDetail::class);
    }

    public function orderedProjectDetails()
    {
        return $this->hasMany(ProjectDetail::class)
                    ->where('index', '>', 0)
                    ->orderBy('index');
    }
}
