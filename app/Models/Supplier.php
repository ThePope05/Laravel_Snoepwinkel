<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'address_id',
        'name',
        'supplier_number',
    ];

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
