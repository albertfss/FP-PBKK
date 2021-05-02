<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function add()
    {
    	return view('addorder');
    }

    public function create(Request $request)
    {
    	$order = new Order();
    	$order->N_id = $request->N_id;
    	$order->L_id = $request->L_id;
    	$order->nama_layanan = $request->nama_layanan;
    	$order->harga = $request->harga;
    	$order->user_id = auth()->user()->id;
    	$order->save();
    	return redirect('/listorder'); 
    }
    function show(){
        
        $data= Order::all();
        return view('vieworder', ['orders'=>$data]);
    }

}