<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the relationship with the Merchant model
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }
}