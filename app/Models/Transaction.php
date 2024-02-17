<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\softDeletes;

class Transaction extends Model
{
    // use HasFactory, softDeletes;
    use HasFactory;

    protected $fillable = [
        'users_id',
        'address',
        'payment_method',
        'total_price',
        'shipping_price',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'users_id', 'id'); // Betul
        // return $this->belongsTo(User::class, 'id', 'users_id'); // Betul
    }

    public function items() {
        // Faham
        return $this->hasMany(TransactionItem::class, 'transactions_id', 'id'); // Betul
        // return $this->hasMany(TransactionItem::class, 'id', 'transactions_id'); // Salah
    }
}
