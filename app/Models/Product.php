<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'categories_id',
        'name',
        'price',
        'description',
        'tags',
    ];

    public function galleries() {
        // Faham
        return $this->hasMany(ProductGallery::class, 'products_id', 'id'); // Betul
        // return $this->hasMany(ProductGallery::class, 'id', 'products_id'); // Salah
    }
    public function category() {
        // X Faham
        return $this->belongsTo(ProductCategory::class, 'categories_id', 'id'); // Betul
        // return $this->belongsTo(ProductCategory::class, 'id', 'categories_id'); // Salah
    }
    // public function transactionItem() {
    //     return $this->belongsTo(TransactionItem::class, 'products_id', 'id');
    // }
}
