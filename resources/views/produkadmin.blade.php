@extends('layouts.appadmin')
@section('title','Produk') 
@section('content')
<div class="container">
<style>
body{
    background-image: url('img/bg.jpg');
    background-size:1280px;
}
    </style>
     <div class="row justify-content-center">
         <div class="col-md-11">
            <div class="card">
                <div class="card-header">PRODUK</div>
                <div class="card body">                         
                    <br><p><a href="{{route('produkadmin.create')}}" class="btn btn-primary btn-lg btn-block"> + Tambah Produk</a></p>     
                    <table class="table table-bordered" >
                      <tr>
                        <th><b>No</b></th>
                        <th><b>Nama</b></th>
                        <th><b>Keterangan</b></th>
                        <th><b>Harga</b></th>
                        <th><b>Image</b></th>
                        <th><b>Action</b></th>
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
                            <td>
                            <a href="{{route('produkadmin.edit',$value['id'])}}" class="btn btn-warning">EDIT</a>
                            <a href="{{route('produkadmin.delete',$value['id'])}}"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus menu {{$value['name']}}')" class="btn btn-danger">HAPUS</a>

                            </td>
                            
                    </tr>

                       </tr>                            
                        @endforeach
                    </table>
                 </div>   

                    </table>                    
                 </div>                
             </div>
         </div>  
     </div>
 </div>   
 @endsection
