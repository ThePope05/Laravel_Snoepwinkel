<?php

namespace App\Http\Controllers;

use App\Models\Allergy;
use App\Models\Product;
use Illuminate\Http\Request;

class AllergyController extends Controller
{
    public function index(Request $request)
    {
        $column_names = ['name product', 'allergies', 'description', 'in storage', 'info'];

        if ($request->has('allergy') && $request->allergy != 'all') {
            $data = Product::whereHas('allergies', function ($query) use ($request) {
                $query->where('allergies.id', $request->allergy);
            })
                ->join('storages', 'products.id', '=', 'storages.product_id')
                ->get();
        } else {
            $data = Product::has('allergies')->join('storages', 'products.id', '=', 'storages.product_id')->get();
        }
        $allergies = Allergy::all();

        return view('allergy.index', compact("data", "allergies", "column_names"));
    }
}
