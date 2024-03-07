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
    <div class="navbar-nav align-items ms-auto">
        <a href="/report" class="nav-link">
            <i class="far fa-clipboard"></i>
            <span class="d-none d-lg-inline-flex">Report</span>
        </a>
        <a href="#" class="nav-link">
            <i class="far fa-clipboard"></i>
            <span class="d-none d-lg-inline-flex">Dashboard</span>
        </a>
    </div>
    </center>
</nav>
<div class="container-fluid pt-4 px-4">
    <div class="row g-10">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Project Definition</h2>
                <a href="{{ route('print.pdf') }}" class="btn btn-sm btn-outline-danger m-2"><i class="fa fa-print m-2"></i>PDF</a>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <th><small>Name Project</small></th>
                                <th><small>Code Project</small></th>
                                <th><small>Contract Value</small></th>
                                <th><small>Business Line</small></th>
                                <th><small>Date</small></th>
                                <th><small>Status</small></th>
                                <th><small>Source of Funds</small></th>
                                <th><small>Business Schema</small></th>
                                <th><small>Contract Duration</small></th>
                                <th><small>Warranty Period</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectDefinition as $u)
                            <tr class="text-white">
                                <td><small>{{$u->name_project}}</small></td>
                                <td><small>{{$u->code_project}}</small></td>
                                <td><small>{{$u->contract_value}}</small></td>
                                <td><small>{{$u->bussines_line}}</small></td>
                                <td><small>{{$u->date}}</small></td>
                                <td><small>{{$u->status}}</small></td>
                                <td><small>{{$u->source_ofFunds}}</small></td>
                                <td><small>{{$u->schema_bussines}}</small></td>
                                <td><small>{{$u->contract_duration}}</small></td>
                                <td><small>{{$u->warranty_period}}</small></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection