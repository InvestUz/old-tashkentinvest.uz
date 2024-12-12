<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'content', 'link', 'published_at'];

    protected $casts = [
        'published_at'=>'date',
    ];
    public function getImagePath()
    {
        // Check if the image is a URL
        if (filter_var($this->image, FILTER_VALIDATE_URL)) {
            return $this->image; // Return the URL
        }

        // Assume it's a local image and return the public path
        return asset('storage/' . $this->image);
    }
}
