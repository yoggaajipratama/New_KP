@extends('layouts.hoapp')

@section('sidebar')
<div class="sidebar-fixed position-fixed" style="background-color:lemonchiffon">
    <a class="logo-wrapper waves-effect">
        <h3>
            <span style="color:maroon"><b>WATER</b><br></span>
            <span class="ml-4" style="color:lightseagreen"><b>PLANTS</b></span>
        </h3>
    </a>
    <div class="list-group list-group-flush">
        <a href="{{url('home')}}" class="list-group-item list-group-item-action waves-effect">
            <h6><i class="fas fa-home mr-3"></i>Beranda</h6></a>
        <a href="{{url('harian')}}" class="list-group-item list-group-item-action waves-effect">
            <h6><i class="fas fa-cloud-rain mr-3"></i>Kelembapan harian</h6></a>
        <a href="{{url('tahun')}}" class="list-group-item active waves-effect">
            <h6><i class="fas fa-cloud-rain mr-3"></i>Kelembapan tahunan</h6></a>
        <a href="{{ url('remote') }}" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-mobile mr-3"></i>Kontrol keran</a>
    </div>
</div>    
@endsection

@section('content')
<div class="container-fluid mt-2">
    <div class="card mb-3 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
            <h4 class="mb-3 mb-sm-0 pt-1">
                <a href="#">Laporan Tahunan</a>
                <span>/</span>
                <span>Dashboard</span>
            </h4>
        </div>
    </div>
    <div class="row wow fadeIn">
        @for ($i = 0; $i <= 20; $i++)
        <div class="col-md-3 mb-2">
            <form action="{{url('tahunan')}}" method="get">
                <div class="box">
                    <div class="form-control form-control-lg">
                        <h4>{{2019+$i}}</h4>
                        <input type="hidden" name="tahun" value="{{2019+$i}}">
                    </div>
                    <input type="submit" value="Buka" class="btn btn-danger">
                </div>
            </form>
        </div>
        @endfor
    </div>
</div>
@endsection
