<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Imports\ProduitImport;
use App\Exports\StockExport;
use App\Models\Log;
use Excel;
use Carbon\Carbon;


class ProduitController extends Controller
{
    public function viewProduit()
    {
        $produits = Produit::orderBy('id','DESC')->get();
        $categories = Produit::select("produit_categorie")
                    ->distinct()->get();
        return view('components.produit', compact('produits', 'categories'));
    }

    public function viewCategorie()
    {
        $categories = Produit::select("produit_categorie")
                    ->distinct()->get();
        return view('components.categorie', compact('categories'));
    }

    public function addProduct(Request $request)
    {
        $produit = new Produit();

        $log = new Log();
        $dt = Carbon::now();
        $todayDate = $dt->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm a');
        $log->action = "Vous avez ajouté l'article $request->produit";
        $log->datetime = $todayDate;
        $log->save();


        $produit->produit_nom = $request->produit;
        $produit->produit_categorie = $request->choice;
        //$produit->produit_quantite = $request->quantite;
        $produit->produit_prix = $request->prix;
        $produit->save();
        $produit->success = 'Nouveau produit ajouté!';

        return response()->json($produit);
    }

    public function getCategoryId($id)
    {
        $categorie = Categorie::find($id);
        return response()->json($categorie);
    }

    public function getProduitId($id)
    {
        $produit = Produit::find($id);
        return response()->json($produit);
    }


    public function updateProduit(Request $request)
    {
        $produit = Produit::find($request->id);


        $log = new Log();
        $dt = Carbon::now();
        $todayDate = $dt->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm a');
        $log->action = "Vous avez modifié l'article $produit->produit_nom par $request->produit";
        $log->datetime = $todayDate;
        $log->save();


        $produit->produit_nom = $request->produit;
        $produit->produit_categorie = $request->choice;
        //$produit->produit_quantite = $request->quantite;
        $produit->produit_prix = $request->prix;
        $produit->save();

        $produit->success = 'Produit modifié avec succès!';

        return response()->json($produit);
    }

    public function deleteProduit($id)
    {
        $produit = Produit::find($id);

        $log = new Log();
        $dt = Carbon::now();
        $todayDate = $dt->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm a');
        $log->action = "Vous avez supprimé l'article $produit->produit_nom";
        $log->datetime = $todayDate;
        $log->save();

        $produit->delete();
        $produit->success = 'Produit supprimé avec succès!';

        return response()->json($produit);
    }

    public function importDoc(Request $request)
    {
        Excel::import(new ProduitImport, $request->file);

        $log = new Log();
        $dt = Carbon::now();
        $todayDate = $dt->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm a');
        $log->action = "Vous avez importé un nouveau stock";
        $log->datetime = $todayDate;
        $log->save();

        $produits = Produit::orderBy('produit_nom','ASC')->get();
        return view('components.stock', compact('produits'));
    }

    public function exportDoc()
    {
        return Excel::download(new StockExport, 'stock.xlsx');
    }

    public function reset()
    {
        Produit::truncate();
        $produits = Produit::orderBy('produit_nom','ASC')->get();
        return view('components.stock', compact('produits'));
    }
}
