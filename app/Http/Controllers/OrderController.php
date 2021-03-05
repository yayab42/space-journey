<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
   public function index(){
//
    }

    public function addToBdd(){

        $date = date('Y-m-d H:i:s');
        $datedelivery = date('Y-m-d', strtotime("+1 week"));
        $user = Auth::id();


        DB::table('orders')->insert([
            'order_date' =>  $date,
            'delivery_date' => $datedelivery,
            'number' => random_int(1000,10000),
            'users_id' => $user,
        ]);
        return view('dashboard', ['date'=>$date]);
    }

}
//$user = Auth::user()['name'];
