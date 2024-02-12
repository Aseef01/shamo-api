<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'products_id',
        'transactions_id',
        'quantity',
    ];

    public function product() {
        // Faham
        // return $this->hasOne(Product::class, 'products_id', 'id'); // Salah
        return $this->hasOne(Product::class, 'id', 'products_id'); // Betul
    }

    // public function user() {
    //     return $this->belongsTo(User::class, 'users_id', 'id');
    // }

    // public function transaction() {
    //     return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    // }
}
