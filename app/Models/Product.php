<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'barcode',
        'description',
    ];

    public function allergies()
    {
        return $this->belongsToMany(Allergy::class, 'product_allergy', 'product_id', 'allergy_id');
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }

    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }
}
