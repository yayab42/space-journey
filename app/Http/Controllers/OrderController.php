<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    public function index(){

    }

    public function addToBdd(){

        $date = date('Y-m-d H:i:s');

        DB::table('orders')->insert([
            'order_date' =>  $date,
            'delivery_date' => $date,
            'number' =>20202020,
            'users_id' => 1,
        ]);
        return view('dashboard', ['date'=>$date]);
    }
}
