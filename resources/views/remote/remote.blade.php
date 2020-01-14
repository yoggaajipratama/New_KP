@extends('../layouts.hoapp')

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
        <a href="{{url('tahun')}}" class="list-group-item list-group-item-action waves-effect">
            <h6><i class="fas fa-cloud-rain mr-3"></i>Kelembapan tahunan</h6></a>
        <a href="#" class="list-group-item active waves-effect">
            <i class="fas fa-mobile mr-3"></i>Kontrol keran</a>
    </div>
</div>    
@endsection

@section('content')
<div class="container-fluid mt-2">
    <div class="card mb-4 wow fadeIn">
        <div class="card-body d-sm-flex justify-content-between">
        <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#">Kontrol keran</a>
            <span>/</span>
            <span>Dashboard</span>
        </h4>
        <hr>
        <thead class="thead-dark">
        </thead>
    </div>
</div>

<div class="row wow fadeIn">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">AKSI</th>
                            <th>WAKTU</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 30; $i+=10)
                        <tr>
                            <td>Nyala/Mati</td>
                            <td>
                                <form action="" method="get">
                                    <a href="http://192.168.43.74/on{{5+$i}}m" target="_blank" class="btn btn-success" style="color:black">
                                        {{5+$i.' Menit'}}</a>
                                </form>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
