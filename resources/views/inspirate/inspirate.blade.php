@extends('layouts.layout')

@section('content') 

<head>
    <link rel="stylesheet" href="/css/inspirate.css">    
</head>

<h2>ALGUNOS DE NUESTROS PROYECTOS</h2>

<div class="grid-container">
    <div class="grid-item">
        <a href="inspirate/hosteleria">
            <img src="img/inspirate/hosteleria/hosteleria2.JPG" alt="Imagen 1">
            <div class="image-text"> HOSTELERIA </div>
        </a>
    </div>
    <div class="grid-item">
        <a href="inspirate/oficinas">
            <img src="img/inspirate/oficina/oficina3.JPG" alt="Imagen 2">
            <div class="image-text"> OFICINAS </div>
        </a>
    </div>
    <div class="grid-item">
        <a href="inspirate/salas-espera">
            <img src="img/inspirate/sala-espera/sala-espera5.JPG" alt="Imagen 3">
            <div class="image-text"> SALAS DE ESPERA </div>
        </a>
    </div>
    <div class="grid-item">
        <a href="inspirate/zonas-comunes">
            <img src="img/inspirate/zonas-comunes/zonas-comunes3.JPG" alt="Imagen 4">
            <div class="image-text"> ZONAS COMUNES </div>
        </a>
    </div>
    <div class="grid-item">
        <a href="inspirate/colegios">
            <img src="img/inspirate/default-image.jpg" alt="Imagen 5">
            <div class="image-text"> COLEGIOS </div>
        </a>
    </div>
    <div class="grid-item">
        <a href="inspirate/salas-grabacion">
            <img src="img/inspirate/default-image.jpg" alt="Imagen 6">
            <div class="image-text"> SALAS DE GRABACION </div>
        </a>
    </div>
</div>

@endsection