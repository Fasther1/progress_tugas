<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',   
        'phone',  
        'address',
        'comment', 
        
    ];

    // Anda juga bisa menambahkan relasi jika diperlukan
    // Contoh relasi dengan produk:
    public function product()
    {
        return $this->hasMany(product::class);
    }
}
