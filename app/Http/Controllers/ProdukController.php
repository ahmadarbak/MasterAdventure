<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
class ProdukController extends Controller
{
    public function produkadmin(){
        $data_produk = Produk::all();
        return view ('produkadmin',compact('data_produk'));
    }
    public function create(){
        return view ('produk_create');
    }
    public function store(Request $request){
        Produk::create($request->all());
        return redirect()->route('produkadmin','produk');
    }
    public function edit($id){
        $data_produk = Produk::findorfail($id);
        return view('produk_edit',compact('data_produk'));
    }
    public function update(Request $request, $id){
        $data_produk = Produk::findorfail($id)
        -> update ([
                
                'name'          => $request['name'],
                'description'   => $request['description'],
                'price'         => $request['price'],
                'image'         => $request['image'],
        ]);
        return redirect()->route('produkadmin','produk');
    }
    public function delete($id){
        $data_produk = Produk::findorfail($id)
        -> delete();
        return redirect()->route('produkadmin','produk');
    }
    public function produk(){
        $data_produk = Produk::all();
        return view ('produk', compact('data_produk'));
    }





}
