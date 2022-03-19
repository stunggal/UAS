
@extends('layout.post')

@section('navbar')
    <li><a href="/dashboard#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
    <li><a href="/dashboard#request" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Request</span></a></li>
    <li><a href="/dashboard#facts" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Information</span></a></li>
    <li><a href="/dashboard#menu" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Menu</span></a></li>
    <li><a href="/dashboard/logout" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Log Out</span></a></li>
@endsection