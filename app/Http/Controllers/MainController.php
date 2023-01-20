<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Produit;

class MainController extends Controller
{
    public function index()
    {
        $days = Order::where("status","Confirmée")
                ->whereDate("commande_debut", date('Y-m-d'))
                ->count();

        $counts = Order::where("status","Confirméé")
                ->count();

        $articles = Produit::all()->count();

        //$stocks = Produit::where("produit_quantite", '<=', 5)->get();

        return view('components.main', compact('days', 'counts', 'articles'));
    }
}
