@extends('layouts.layout')

@section('content') 

<head>
    <link rel="stylesheet" href="/css/panels.css">    
</head>

<div class="jv-container">
    <h2>ESTANDAR</h2>
    <hr>
    <div class="product-container">
        @foreach($estandar as $jv)
            <div class="product-item">
                <img src="{{ asset($jv->image) }}" alt="{{ $jv->name }}">
                <div class="container-text">
                    <p class="name"> {{ $jv->name }} </p>
                    <p class="price"> {{ $jv->price }} €</p>
                </div>
                <button>AÑADIR AL CARRITO</button>
            </div>
        @endforeach 
    </div>
</div>

<div class="jv-container">
    <h2>IGNIFUGO</h2>
    <hr>
    <div class="product-container">
        @foreach($ignifugo as $jv)
            <div class="product-item">
                <img src="{{ asset($jv->image) }}" alt="{{ $jv->name }}">
                <div class="container-text">
                    <p class="name"> {{ $jv->name }} </p>
                    <p class="price"> {{ $jv->price }} €</p>
                </div>
                <button>AÑADIR AL CARRITO</button>
            </div>
        @endforeach 
    </div>
</div>

<div class="project-container">
    <h3>¿Tienes un proyecto en mente?</h3>
    <button class="personalizado">PROYECTO PERSONALIZADO</button>
</div>


@endsection