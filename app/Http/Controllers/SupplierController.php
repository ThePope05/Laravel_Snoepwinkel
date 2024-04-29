<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function show(Request $request, $supplier)
    {
        $supplier = Supplier::join('contacts', 'suppliers.contact_id', '=', 'contacts.id')
            ->where('suppliers.id', $supplier)
            ->select('suppliers.name AS sup_name', 'contacts.name AS cont_name', 'contacts.phone', 'suppliers.address_id')
            ->first();
        $address  = Address::find($supplier->address_id);
        $column_names = ['name supplier', 'contact person', 'phone number', 'city', 'street', 'house number'];

        return view('supplier.show', compact("supplier", 'address', "column_names"));
    }
}
