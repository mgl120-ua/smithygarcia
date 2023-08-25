@extends('layouts.layout')

@section('content') 

<head>
    <link rel="stylesheet" href="/css/cart.css">    
</head>

<div class="cart-container">
    <h2>Carrito de Compras</h2>
    <hr>
    <div class="cart-items">
        @foreach($cartItems as $cartItem)
            <div class="cart-item">
                <img src="{{ asset($cartItem->product->img) }}" alt="{{ $cartItem->product->name }}">
                <div class="item-details">
                    <p class="name">{{ $cartItem->product->name }}</p>
                    <p class="price">{{ $cartItem->product->price }} €</p>
                    <p class="quantity">Cantidad: {{ $cartItem->quantity }}</p>
                </div>
                <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="remove-button" type="submit">Quitar</button>
                </form>
            </div>
        @endforeach 
        @foreach($cartItems as $id => $cartItem)
    <div class="cart-item">
        <img src="{{ asset($cartItem['product']->img) }}" alt="{{ $cartItem['product']->name }}">
        <div class="item-details">
            <p class="name">{{ $cartItem['product']->name }}</p>
            <p class="price">{{ $cartItem['product']->price }} €</p>
            <p class="quantity">Cantidad: {{ $cartItem['quantity'] }}</p>
        </div>
        <form action="{{ route('cart.remove', $id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="remove-button" type="submit">Quitar</button>
        </form>
    </div>
@endforeach

    </div>
    <div class="cart-total">
        <p>Total: {{ $cartTotal }} €</p>
        <a href="{{ route('checkout') }}" class="checkout-button">Realizar Pedido</a>
    </div>
</div>

@endsection
