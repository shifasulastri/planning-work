@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px;">
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <center>
    <div class="navbar-nav align-items-center ms-auto">     
        <a href="/projectCharter" class="nav-link">
            <i class="far fa-clipboard"></i>
            <span class="d-none d-lg-inline-flex">Dashboard</span>
        </a>
        <a href="/projectDefinition" class="nav-link">
            <i class="fas fa-book-open"></i>
            <span class="d-none d-lg-inline-flex">Report</span>
        </a>
    </div>
    </center>
</nav>
@endsection

