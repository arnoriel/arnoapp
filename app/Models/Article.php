<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $visible = ['title', 'thumbnail', 'imgsrc', 'content', 'desc', 'creator_id', 'date'];

    protected $fillable = ['title', 'thumbnail', 'imgsrc', 'content', 'desc', 'creator_id', 'date'];

    public $timestamps = true;

    public function thumbnail()
    {
        if ($this->thumbnail && file_exists(public_path('images/article/' . $this->thumbnail))) {
            return asset('images/article/' . $this->thumbnail);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function creator()
    {
        return $this->belongsTo('App\Models\Creator', 'creator_id');
    }
}
