<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'is_header',
        'is_sidebar',
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($script) {
            $script->blogs()->delete();
        });
    }
}
