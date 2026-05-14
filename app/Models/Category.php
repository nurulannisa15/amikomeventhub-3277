<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * mass assignment
     * Mengizinkan kolom 'name' dan 'slug' untuk diisi secara massal
     */
    protected $fillable = ['name', 'slug'];

    /**
     * Relasi ke model Event
     * Satu kategori bisa memiliki banyak Event
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}