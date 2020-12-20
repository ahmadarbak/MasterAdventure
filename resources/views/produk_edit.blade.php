@extends('layouts.appadmin')
@section('content')
<style>
body{
    background-image: url('img/bg.jpg');
    background-size:1280px;
}
 </style>
<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-10">
            <div class="card">
                <div class="card-header">EDIT PRODUK</div>
                <div class="card body">
                   <form method="POST" action="{{route('produkadmin.update', $data_produk['id'])}}">
                   @csrf
                   @method('PUT')
                    <br>
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Nama Produk</label>
                    <div class="col-md-6">
                        <input type="text" name="name" value ="{{$data_produk['name']}}" class="form-control" >
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Deskripsi Produk</label>
                    <div class="col-md-6">
                        <input type="text" name="description" value ="{{$data_produk['description']}}" class="form-control" >
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Harga</label>
                    <div class="col-md-6">
                        <input type="text" name="price" value ="{{$data_produk['price']}}" class="form-control" >
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Gambar</label>
                    <div class="col-md-6">
                        <input type="file" name="image" value ="{{$data_produk['image']}}" class="form-control-file">
                    </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-md-4 text-md-right"></label>
                        <div class="col-md-6">
                        <button class="btn btn-success" type="submit">SIMPAN</button>
                        </div>
                    </div>
                   </form>
                 </div>
             </div>
         </div>  
     </div>
 </div>   
 @endsection
