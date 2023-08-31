@extends('layouts.layout')

@section('content')

<head>
    <link rel="stylesheet" href="/css/contact.css">    
</head>

    <h1>Envianos un mensaje</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="/contact" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Introduce tu nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Introduce tu email" required>
        </div>
        <div class="form-group">
            <label for="phone">Número de Teléfono</label>
            <input type="tel" id="phone" name="phone" placeholder="Introduce tu número de teléfono" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea id="message" name="message" rows="6" placeholder="Introduce tu mensaje" required></textarea>
        </div>
        <div class="button-container">
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection
