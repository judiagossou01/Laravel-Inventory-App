<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Command;

class BudgetController extends Controller
{
    public function index()
    {
        return view('components.budget');
    }

    public function byDate(Request $request)
    {
        if ($request->choice == 'jour'){
            $res = Order::join('commands', 'commands.order_id', 'orders.id')
                        ->whereDate('orders.commande_debut', $request->date)->get();

            $output = '';
            $output .= '<div class="card prod-p-card card-red">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Profit Total</h6>
                            <h3 class="m-b-0 f-w-700 text-white">'.$res->sum('total').'</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                        </div>
                    </div>
                </div>
            </div>';

            echo $output;
        }
    }

    public function byMonth(Request $request)
    {
        if ($request->choice == 'mois'){

            $date = explode('-', $request->month);
            $year = $date[0];
            $month = $date[1];
            $res = Order::join('commands', 'commands.order_id', 'orders.id')
                        ->whereYear('orders.commande_debut', $year)
                        ->whereMonth('orders.commande_debut', $month)->get();

            $output = '';
            $output .= '<div class="card prod-p-card card-red">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Profit Total</h6>
                            <h3 class="m-b-0 f-w-700 text-white">'.$res->sum('total').'</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                        </div>
                    </div>
                </div>
            </div>';

            echo $output;
        }
    }

    public function byYear(Request $request)
    {
        if ($request->choice == 'an'){

            $res = Order::join('commands', 'commands.order_id', 'orders.id')
                        ->whereYear('orders.commande_debut', $request->year)
                        ->get();

            $output = '';
            $output .= '<div class="card prod-p-card card-red">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Profit Total</h6>
                            <h3 class="m-b-0 f-w-700 text-white">'.$res->sum('total').'</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                        </div>
                    </div>
                </div>
            </div>';

            echo $output;
        }
    }
}
