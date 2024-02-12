<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, softDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function products() {
        // Faham
        return $this->hasMany(Product::class, 'categories_id', 'id');  // Betul
        // return $this->hasMany(Product::class, 'id', 'categories_id'); // Salah
    }
}
