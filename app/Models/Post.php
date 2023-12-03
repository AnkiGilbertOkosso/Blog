<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'image', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Registering the event listener for the "deleting" event
        static::deleting(function ($post) {
            // Delete the attached image
            if (!empty($post->image)) {
                Storage::delete($post->image);
            }
        });

        static::updating(function ($post) {
            // Check if the image is being changed
            if ($post->isDirty('image')) {
                // Delete the old image
                Storage::delete($post->getOriginal('image'));
            }
        });
    }
}
