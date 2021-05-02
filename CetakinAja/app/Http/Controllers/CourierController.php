<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courier;

class CourierController extends Controller
{
    //
    public function add()
    {
    	return view('addcourier');
    }

    public function create(Request $request)
    {
    	$courier = new Courier();
    	$courier->K_id = $request->K_id;
    	$courier->K_nama = $request->K_nama;
    	$courier->K_email = $request->K_email;
    	$courier->K_biaya = $request->K_biaya;
    	$courier->save();
    	return redirect('/listcourier'); 
    }
    function show(){
        
        $data= Courier::all();
        return view('viewcourier', ['couriers'=>$data]);
    }
}
