@extends('layouts.layout')

@section('content') 

<head>
    <link rel="stylesheet" href="/css/panels.css">    
</head>

<div class="panel-container">
    <h2>FOAM</h2>
    <hr>
    <div class="product-container">
        @foreach($foamPanels as $panel)
            <div class="product-item">
                <img src="{{ asset($panel->img) }}" alt="{{ $panel->name }}">
                <div class="container-text">
                    <p class="name"> {{ $panel->name }} </p>
                    <p class="price"> {{ $panel->price }} €</p>
                </div>
                <button>AÑADIR AL CARRITO</button>
            </div>
        @endforeach 
    </div>
</div>

<div class="panel-container">
    <h2>PET</h2>
    <hr>
    <div class="product-container">
        @foreach($petPanels as $panel)
            <div class="product-item">
                <img src="{{ asset($panel->img) }}" alt="{{ $panel->name }}">
                <div class="container-text">
                    <p class="name"> {{ $panel->name }} </p>
                    <p class="price"> {{ $panel->price }} €</p>
                </div>
                <button>AÑADIR AL CARRITO</button>
            </div>
        @endforeach 
    </div>
</div>

<div class="panel-container">
    <h2>MOBILIARIO</h2>
    <hr>
    <div class="product-container">
        @foreach($mobiliarioPanels as $panel)
            <div class="product-item">
                <img src="{{ asset($panel->img) }}" alt="{{ $panel->name }}">
                <div class="container-text">
                    <p class="name"> {{ $panel->name }} </p>
                    <p class="price"> {{ $panel->price }} €</p>
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