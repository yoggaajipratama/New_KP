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
        <a href="{{url('home')}}" class="list-group-item active waves-effect">
            <h6><i class="fas fa-home mr-3"></i>Beranda</h6></a>
        <a href="{{url('harian')}}" class="list-group-item list-group-item-action waves-effect">
            <h6><i class="fas fa-cloud-rain mr-3"></i>Kelembapan harian</h6></a>
        <a href="{{url('tahun')}}" class="list-group-item list-group-item-action waves-effect">
            <h6><i class="fas fa-cloud-rain mr-3"></i>Kelembapan tahunan</h6></a>
        <a href="{{ url('remote') }}" class="list-group-item list-group-item-action waves-effect">
            <h6><i class="fas fa-mobile mr-3"></i>Kontrol keran</h6></a>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid mt-2">
    <div class="card mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#">Halaman Beranda</a>
            <span>/</span>
            <span>Dashboard</span>
        </h4>
    </div>
</div>

<div class="row wow fadeIn">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="blue-grey lighten-4">
                        <tr>
                            <th>Kelembapan tertinggi</th>
                            <th>Kelembapan terendah</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                @if ($dataD->max('humidity')!=NULL)
                                    {{$dataD->max('humidity')}}%
                                @else
                                    {{'Tidak ada data'}}
                                @endif
                            </th>
                            <td>
                                @if ($dataD->min('humidity')!=NULL)
                                    {{$dataD->min('humidity')}}%
                                @else
                                    {{'Tidak ada data'}}
                                @endif
                            </td>
                            <td>{{$today.' (Today)'}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row wow fadeIn">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="blue-grey lighten-4">
                        <tr>
                            <th>Keran menyala</th>
                            <th>Keran mati</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                @php
                                 $no = 0;
                                @endphp
                                @foreach ($dataX as $item)
                                    @php $no++ @endphp
                                @endforeach
                                {{$no}} Kali
                            </th>
                            <td>
                                @php $no = 0; @endphp
                                @foreach ($dataY as $item)
                                    @php $no++ @endphp
                                @endforeach
                                {{$no}} Kali
                            </td>
                            <td>{{$today.' (Today)'}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
