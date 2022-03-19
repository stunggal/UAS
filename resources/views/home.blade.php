
@extends('layout.main')

@section('recipeTitle')
    <p>Check Our Recipe Collection</p>
@endsection

@section('galeri')
    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
        <a href="img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
            <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
        </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
        <a href="img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
            <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
        </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
        <a href="img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
            <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
        </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
        <a href="img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
            <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
        </a>
        </div>
    </div>
@endsection

@section('for')
    @foreach ( $all as $a)
    <div class="col-lg-6 menu-item filter-{{$a->kategori}}">
        <img src="img/gallery/{{$a->img}}" class="menu-img" alt="">
        <div class="menu-content">
        <a href="recipe/{{$a->id}}">{{$a->nama}}</a>
        </div>
        <div class="menu-ingredients">
        <p>{{$a->deskripsi}}</p>
        </div>
    </div>
    @endforeach
@endsection

@section('navbar')
    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
    <li><a class="nav-link scrollto" href="#about">About</a></li>
    <li><a class="nav-link scrollto" href="#recipe">Recipe</a></li>
    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
@endsection