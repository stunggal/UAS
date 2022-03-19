
@extends('layout.form')

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

@section('navbar')
    <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
    <li><a class="nav-link scrollto" href="/#about">About</a></li>
    <li><a class="nav-link scrollto" href="/#recipe">Recipe</a></li>
    <li><a class="nav-link scrollto" href="/#gallery">Gallery</a></li>
@endsection

@section('container')
    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <div class="section-title">
            <h2>Admin Login</h2>
            <h1>Enter Your ID</h1>
        </div>

        @if (session()->has('loginFail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Failed To Login, </strong>Please Try Again
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/admin" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Username</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Eg. Imam Rasyidin" autofocus required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="*********" autofocus required>
            </div>
                       
            <button type="submit" class="book-a-table-btn" style="background-color: black">Login</button>
        </form>
       
    </div>
    
@endsection