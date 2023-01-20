<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Command;
use App\Models\Order;
use App\Models\Produit;
use App\Models\Log;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function index()
    {
        $products = Produit::orderBy('produit_nom','ASC')->get();
        return view('components.commande', compact('products'));
    }

    public function invoice(Request $request)
    {
        $orders = new Order();
        $orders->reference = mt_Rand(10000000, 99999999);
        $orders->client_name = $request->nomcli;
        $orders->client_phone = $request->telcli;
        $orders->commande_debut = $request->date_invoice;
        $orders->client_adr = $request->addrcli;
        $orders->save();

        $order_id = $orders->id;

        for ($product_id=0; $product_id < count($request->product) ; $product_id++) { 
            $article = Produit::select("produit_nom")
                    ->where("id", $request->product[$product_id])->first();

            $details = new Command();
            $details->order_id = $order_id;
            $details->produit_id = $request->product[$product_id];
            $details->produit_nom = $article->produit_nom;
            $details->quantite = $request->quantite[$product_id];
            $details->prix = $request->price[$product_id];
            $details->total = $request->total[$product_id];
            $details->save();
        }

        $log = new Log();
        $dt = Carbon::now();
        $todayDate = $dt->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm a');
        $log->action = "Vous avez ajouté la commande N° $orders->reference";
        $log->datetime = $todayDate;
        $log->save();


        $datas = Order::orderBy('id','DESC')->where("status", "En cours")->get();
        return view('components.order', compact('datas'));

    }

    public function order()
    {
        $datas = Order::orderBy('id','DESC')
                ->where("status","En cours")
                ->get();
        return view('components.order', compact('datas'));
    }


    public function valid()
    {
        $datas = Order::orderBy('id','DESC')
                ->where("status","Confirmée")
                ->get();
        return view('components.valid', compact('datas'));
    }


    public function getOrder($id)
    {
        $orders = Order::find($id);
        $order_details = Command::where("order_id", $orders->id)->get();
        //return response()->json(['orders' => $orders, 'details' => $order_details]);
        return view('components.invoice', ['orders' => $orders, 'details' => $order_details]);
    }

    public function updateOrder($id)
    {
        $req = Order::join('commands', 'commands.order_id', 'orders.id')
                ->where('orders.id', $id)->get();
               
        /* foreach ($req as $item) {
            $nbre = Produit::find($item->produit_id);
            $nbre->decrement('produit_quantite', $item->quantite);
            $nbre->save();
        } */

        //Recent activities
        $valid = Order::find($id);
        $log = new Log();
        $dt = Carbon::now();
        $todayDate = $dt->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm a');
        $log->action = "Vous avez validé la commande N° $valid->reference";
        $log->datetime = $todayDate;
        $log->save();


        //Change Order Status
        $valid->status = "Confirmée";
        $valid->save();
        

        //Change Order Status
        //Order::find($id)->update(['status' => "Confirmée"]);

        return response()->json(['success' => "Transaction validée"]);
    }

    public function deleteOrder($id)
    {
        $del = Order::find($id);

        $log = new Log();
        $dt = Carbon::now();
        $todayDate = $dt->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm a');
        $log->action = "Vous avez annulé la commande N° $del->reference";
        $log->datetime = $todayDate;
        $log->save();


        $del->delete();
        $supp = Command::where("order_id", $id);
        $supp->delete();
        $del->success = 'Transaction supprimée avec succès!';

        return response()->json($del);
    }
}

