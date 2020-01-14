@extends('layouts.hrapp')

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
        <a href="{{url('harian')}}" class="list-group-item active waves-effect">
            <h6><i class="fas fa-cloud-rain mr-3"></i>Kelembapan harian</h6></a>
        <a href="{{url('tahun')}}" class="list-group-item list-group-item-action waves-effect">
            <h6><i class="fas fa-cloud-rain mr-3"></i>Kelembapan tahunan</h6></a>
        <a href="{{ url('remote') }}" class="list-group-item list-group-item-action waves-effect">
            <i class="fas fa-mobile mr-3"></i>Kontrol keran</a>
    </div>
</div>    
@endsection

@section('content')
<div class="container-fluid mt-2">
    <div class="card mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#">Laporan Harian</a>
            <span>/</span>
            <span>Dashboard</span>
        </h4>
        <form class="d-flex justify-content-center">
            <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
            <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>

<div class="row wow fadeIn">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>Nomor</th>
                        <th>Kelembapan</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                    </tr>
                    <?php $no=1?>
                    @foreach ($data as $val)
                    <tr>
                        <td scope="row">{{$no++}}</td>
                        <td>{{$val->humidity}}%</td>
                        <td>{{$val->status}}</td>
                        <td>{{$val->date}}</td>
                        <td>{{$val->time}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
<div style="width: 50%; margin: 30px;">
    {{$data->links()}}
</div>
@endsection
