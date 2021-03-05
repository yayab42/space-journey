<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
 //   public function index(){
 //       $order = [];

 //       $order = [];

   // }

    public function addToBdd(){

        $date = date('Y-m-d H:i:s');
        $datedelivery = date('Y-m-d', strtotime("+1 week"));

        DB::table('orders')->insert([
            'order_date' =>  $date,
            'delivery_date' => $datedelivery,
            'number' => random_int(1000,10000),
            'users_id' => '1',
        ]);
        return view('dashboard', ['date'=>$date]);
    }

}
