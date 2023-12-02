<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $visible = ['title', 'cover', 'info', 'bio', 'about'];

    protected $fillable = ['title', 'cover', 'info', 'bio', 'about'];

    public $timestamps = true;

    public function cover()
    {
        if ($this->cover && file_exists(public_path('images/aset/' . $this->cover))) {
            return asset('images/aset/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }
}
