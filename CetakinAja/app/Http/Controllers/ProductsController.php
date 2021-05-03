<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
   //
   public function add()
   {
       return view('addproduct');
   }

   public function create(Request $request)
   {
       $product = new Product();
       $product->Pr_id = $request->Pr_id;
       $product->Pr_nama = $request->Pr_nama;
       $product->Pr_harga = $request->Pr_harga;
       $product->Pr_satuan = $request->Pr_satuan;
       $product->save();
       return redirect('/listproduct'); 
   }
   function show(){
       
       $data= Printing::all();
       return view('viewproduct', ['products'=>$data]);
   }
}
