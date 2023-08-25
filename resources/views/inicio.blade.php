@extends('layouts.layout')

@section('content') 

<head>
    <link rel="stylesheet" href="/css/estilos-inicio.css">    
</head>

<div class="image-container">
    <a href="/paneles-acusticos">
        <div class="image-column">
            <img src="/img/inicio/panel.png" alt="Paneles Acusticos Decorativos" loading="lazy">
            <div class="container-text">
                <div class="image-text">Paneles Acusticos Decorativos </div>
            </div>
        </div>
    </a>
    <a href="/jv-sintetico">
        <div class="image-column">
            <img src="/img/inicio/jvsintetico.png" alt="Jardines Verticales Sinteticos" loading="lazy">
            <div class="container-text">
                <div class="image-text"> Jardines Verticales Sinteticos </div>
            </div>
        </div>
    </a>
    <a href="/jv-natural">
        <div class="image-column">
            <img src="/img/inicio/jvnatural.png" alt="Jardines Verticales Naturales" loading="lazy">
            <div class="container-text">
                <div class="image-text"> Jardines Verticales Naturales </div>
            </div>
        </div>
    </a>
</div>

<div class="about-us-container">
    <div class="about-us">
        <h2>SOLUCIONES ACUSTICAS</h2>
        <p class="about-us-text">En SmithyGarcia, trabajamos transformando espacios en entornos excepcionales. Somos líderes en ingeniería acústica,  cada solución que ofrecemos es una obra cuidadosamente elaborada que redefine la forma en que experimentamos el sonido y el entorno. Desde oficinas hasta salas de conciertos, nuestros paneles han establecido un estándar en el control acústico.</p>
    </div>

    <div class="about-us-gif">
        <img src="img/inicio/about-us.png" alt="gif">
    </div>
</div>

<div class="project-container">
    <h3 class="project-header">¿Tienes un proyecto en mente?</h3>
    <button>PROYECTO PERSONALIZADO</button>
</div>

<h2>ALGUNOS DE NUESTROS PROYECTOS</h2>
<div class="slider-wrapper">
    <div class="slider">
        <a href="#img2" target="_blank"><img id="img1" src="img/inicio/1.JPG" alt=""></a>
        <a href="#img3"><img id="img2" src="img/inicio/2.JPG" alt=""></a>
        <a href="#img4"><img id="img3" src="img/inicio/3.JPG" alt=""></a>
        <a href="#img5"><img id="img4" src="img/inicio/4.JPG" alt=""></a>
        <a href="#img1"><img id="img5" src="img/inicio/5.JPG" alt=""></a>
    </div>
    <div class="slider-nav">
        <a href="#img1"></a>
        <a href="#img2"></a>
        <a href="#img3"></a>
        <a href="#img4"></a>
        <a href="#img5"></a>
    </div>
</div>

@endsection