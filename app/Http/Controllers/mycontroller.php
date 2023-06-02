<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
Use Symfony\Component\Console\Input\Input;

class mycontroller extends Controller
{
    // insert data in db
    function insert(Request $req){
        $name = $req->get('pname');
        $price = $req->get('pprice');
        $pimage = $req->file('image')->getClientOriginalName();
        //move uploaded file
        $req->image->move(public_path('images'),$pimage);
        
        $prod = new product();
        $prod->PName = $name;
        $prod->Pprice = $price;
        $prod->PImage = $pimage;
        $prod->save();
        return redirect('/');

    }
    //  show data
    function readdata(){
        $pdata = product::all();
        return view('InsertRead',['data'=>$pdata]);
    }


    // updatedeletedata
    function updateordelete(Request $req){
         $id = $req->get('id');
         $name = $req->get('name');
         $price = $req->get('price');
         if($req->get('update') == 'Update'){
            return view('updateview',['pid'=>$id,'pname'=>$name,'pprice'=>$price]);
         }
         else{
          $prod = product::find($id);
          $prod->delete();
         }
         return redirect('/');
    }
    //only for update
    function update(Request $req){
        $ID = $req->get('id');
        $name = $req->get('name');
        $price = $req->get('price');
        $prod = product::find($ID);
        $prod->PName = $name;
        $prod->Pprice = $price;
        $prod->save();
        return redirect('/'); 

    }
}
