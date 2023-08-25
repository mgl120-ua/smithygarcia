@extends('layouts.layout')

@section('content') 

<head>
    <link rel="stylesheet" href="/css/inspirate2.css">    
</head>

<div class="slider-wrapper">
    <div class="slider">
        @foreach ($projects as $oficina => $project)
            <img id="img{{ $index + 1 }}" src="{{ asset($project->img) }}" alt="">
        @endforeach
    </div>
    <div class="slider-nav">
        @foreach ($projects as $oficina => $project)
            <a href="#img{{ $index + 1 }}"></a>
        @endforeach
    </div>
</div>


@endsection