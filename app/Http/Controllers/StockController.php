<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class StockController extends Controller
{
    public function index()
    {
        $produits = Produit::orderBy('produit_nom','ASC')->get();
        return view('components.stock', compact('produits'));
    }
}
