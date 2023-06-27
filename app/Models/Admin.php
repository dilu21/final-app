<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $fillable = [
        'title', 'subtitle', 'author', 'image', 'description', 'caption'
    ];

    public function category()
    {
        return $this->hasMany(Category::class, 'id', 'categories_id');
    }
}
