<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'package_unit',
        'in_storage',
    ];

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
