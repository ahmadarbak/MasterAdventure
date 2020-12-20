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
                <div class="card-header">TAMBAH PRODUK</div>
                <div class="card body">
                   <form method="POST" action="{{route('produkadmin.store')}}">
                   @csrf
                   @method('PUT')
                    <br>
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Nama Produk</label>
                    <div class="col-md-6">
                      <input type="text" name="name" class="formcontrol" placeholder="Masukkan nama Produk">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Deskripsi Produk</label>
                    <div class="col-md-6">
                        <input type="text" name="description" class="form-control" placeholder="Masukkan deskripsi produk">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Harga per hari</label>
                    <div class="col-md-6">
                        <input type="text" name="price" class="form-control" placeholder="Masukkan harga">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-4 text-md-right">Gambar</label>
                    <div class="col-md-6" width="100px">
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-md-4 text-md-right"></label>
                            <div class="col-md-6">
                                <button class="btn btn-success" type="submit">SIMPAN</button>
                                <a class="btn btn-danger" href="{{ route('produkadmin') }}" role="button">BATAL</a>
                        </div>
                    </div>
                   </form>
                 </div>
             </div>
         </div>  
     </div></div>   
 @endsection
