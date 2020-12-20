@extends('layouts.app')

@section('title','Produk') 
@section('content')
<style>
body{
    background-image: url('img/bg.jpg');
    background-size:1280px;
}
a{
    color:white;
}

    </style>
<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-10">
            <div class="card">
                <div class="card-header">PRODUK
                <div class="card body">
               
                    <table class="table table-bordered">
                      <tr>
                        <th><b>No</b></th>
                        <th><b>Nama</b></th>
                        <th><b>Keterangan</b></th>
                        <th><b>Harga</b></th>
                        <th><b>Image</b></th>
                    </tr>
                        @php $id=0; @endphp
            
                        @foreach($data_produk as $value)
                        @php $id++; @endphp
                        <tr>
                            <td>{{$id}}</td>                  
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->price }}</td>
                            <td>
                                <img src="{{asset('img/'.$value->image)}}" width="128px">
                            </td> 
                            </tr>
                        @endforeach
                    </table>
                 </div>
                </div>
             </div>
         </div>  
     </div>
 </div> 
 <br>  
 <center><button class="btn btn-success" ><a href="https://wa.me/6289681543704?text=Kak saya mau sewa alat pendakian">BOOKING SEKARANG</a></button></center>
 @endsection
