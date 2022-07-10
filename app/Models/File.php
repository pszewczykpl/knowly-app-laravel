<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'name',
        'code',
        'extension',
        'draft',
        'type',
    ];

    public function investments()
    {
        return $this->morphedByMany('App\Models\Investment', 'fileable')->withTimestamps();
    }

    public function fileCategory()
    {
        return $this->belongsTo('App\Models\FileCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
