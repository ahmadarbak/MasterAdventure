@extends('layouts.app')

@section('title','Home')
@section('content')
<style>
    *{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}.banner{
    font-size:200;
    font-family: 'Nunito';
    height: 100vh;
    background-image: url('img/bg.jpg');
    background-size: cover;
    position: relative;
    justify-content: center;
    display: flex;
    align-items: center;
}

}

section{
    padding: 50px 0px;
}
.m-b-md {
    
    margin-bottom: 30px
}
.add{
    text-align: center;
    font-family: sans-serif;
    color: white;
    font-size: 20px;
}
h2{
    color: white;
    z-index: 1;
    padding: 20px 25px;
    text-align: center;
    font-size:84px;
}
a{
    color:black;
}
/*  footer */
footer{
    font-family: sans-serif;
    padding: 10px;
    background-color: silver;
    color: black;
    text-align: center;
}
</style>
<section class="banner">
<div class="title m-b-md">
                    <h2>MASTER ADVENTURE</h2>
                <p class="add">Jl. KH. Ahmad Dahlan Gg Arjuno No.12 Demangan Lamongan</p>
                </div>
    </section>
<!--footer-->
<footer>
<img src="{{ ('img/ig.png ') }}"alt="Image" height="20" width="20">&nbsp;<a href=”https://instagram.com/master_advlmg?igshid=1sh9iu7wksgqf”>MASTER ADVENTURE</a>&nbsp;&nbsp;
<img src="{{ ('img/wa.png ') }}"alt="Image" height="20" width="20">&nbsp;<a href="https://wa.me/6289681543704?text=Kak saya mau sewa alat pendakian">089681543704</a>

              
    <div class="container"></div>
    <small>Copyright &copy; 2020 - Master Adventure Lamongan </small>
</footer>
@endsection