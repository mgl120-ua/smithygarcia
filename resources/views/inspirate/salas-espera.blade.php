@extends('layouts.layout')

@section('content') 

<head>
    <link rel="stylesheet" href="/css/inspirate.css">    
</head>

<div class="slider-wrapper">
    <div class="slider">
        @foreach ($projects as $index => $project)
        
            <img id="img{{ $index + 1 }}" src="{{ asset($project->img) }}" alt="">
        @endforeach
    </div>
    <div class="slider-nav">
        @foreach ($projects as $index => $project)
            <a href="#img{{ $index + 1 }}"></a>
        @endforeach
    </div>
</div>


@endsection