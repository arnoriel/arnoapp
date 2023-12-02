<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $visible = ['name', 'email', 'phone', 'dob'];

    protected $fillable = ['name', 'email', 'phone', 'dob'];

    public $timestamps = true;

    public function article()
    {
        $this->hasMany('App\Models\Article', 'creator_id');
    }

}
