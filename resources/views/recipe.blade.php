@extends('layout.single')

@section('navbar')
    <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
    <li><a class="nav-link scrollto" href="/#about">About</a></li>
    <li><a class="nav-link scrollto" href="/#recipe">Recipe</a></li>
    <li><a class="nav-link scrollto" href="/#gallery">Gallery</a></li>
@endsection

@section('nama')
    {!! $find->nama !!}
@endsection

@section('deskrpsi')
    {!! $find->deskripsi !!}
@endsection

@section('proses')
    {!! $find->proses !!}
@endsection

@section('bahan')
    {!! $find->bahan !!}
@endsection

@section('img')
    <img src="../img/gallery/<?= $find->img?>" alt="">
@endsection

@section('galeri')
    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
        <a href="../img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
            <img src="../img/gallery/gallery-1.jpg" alt="" class="img-fluid">
        </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
        <a href="../img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
            <img src="../img/gallery/gallery-2.jpg" alt="" class="img-fluid">
        </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
        <a href="../img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
            <img src="../img/gallery/gallery-3.jpg" alt="" class="img-fluid">
        </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
        <a href="../img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
            <img src="../img/gallery/gallery-4.jpg" alt="" class="img-fluid">
        </a>
        </div>
    </div>
@endsection