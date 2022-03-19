
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
            <h2>Let Us Know What Recipe Do You Need</h2>
            <h1>Enter Your Requested Recipe</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Your Request has been Sent, </strong>Need More Recipe...?
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <form action="/wish" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Eg. Imam Rasyidin" autofocus required>
            </div>
            <div class="mb-3">
                <label for="makanan" class="form-label">Nama Makanan</label>
                <input type="text" name="nama_makanan" class="form-control" id="makanan" placeholder="Nasi Goreng" autofocus required>
            </div>
            <div class="mb-3">
                <label for="bahan" class="form-label">Bahan Dasar</label>
                <input type="text" name="bahan_dasar" class="form-control" id="bahan" placeholder="Nasi" autofocus required>
            </div>
                       
            <button type="submit" class="book-a-table-btn" style="background-color: black">Send Request</button>
        </form>
       
    </div>
    
@endsection