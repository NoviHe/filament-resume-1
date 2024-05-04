<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'tags' => 'array',
        'images' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }

    function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'project_category_id', 'id');
    }
}
