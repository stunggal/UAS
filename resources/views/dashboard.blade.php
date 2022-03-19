
@extends('layout.dashboard')

@section('navbar')
    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
    <li><a href="#request" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Request</span></a></li>
    <li><a href="#facts" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Information</span></a></li>
    <li><a href="#menu" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Menu</span></a></li>
    <li><a href="/logout" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Log Out</span></a></li>
@endsection