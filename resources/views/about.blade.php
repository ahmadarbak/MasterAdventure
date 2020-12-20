@extends('layouts.app')

@section('title','About')
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
<div class="cover">
<center><h2>ABOUT </h2>  
<h3>Master Adventure Lamongan merupakan suatu usaha yang bergerak di bidang jasa, yaitu menyewakan perlengkapan dan peralatan outdoor,maupun retailer alat outdoor yang berada di daerah lamongan, tempat persewaan ini mematok harga yang cukup terjankau untuk jasa persewaannya, sehingga banyak orang yang tertarik untuk menggunakan jasa persewaan Master Adventure Lamongan.  </h3>
<br><h3>
Alamat : Jl. KH. Ahmad Dahlan Gg Arjuno No.12 Demangan Lamongan<h3>
</br>
<br>
<h3><img src="{{ ('img/wa.png ') }}"alt="Image" height="50" width="50">&nbsp;<a href="https://wa.me/6289681543704?text=Kak saya mau sewa alat pendakian">089681543704</a>
</br>
<br>
<img src="{{ ('img/ig.png ') }}"alt="Image" height="50" width="50">&nbsp;<a href=”https://instagram.com/master_advlmg?igshid=1sh9iu7wksgqf”>MASTER ADVENTURE</a>
</br></h3>
</center>
    
@endsection
