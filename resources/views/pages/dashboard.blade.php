@extends('master')
@section('content')

<div class="row">
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-success pull-right">aktif</span>
                <h5>Pengguna</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">40 886,200</h1>
                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                <small>Total Pengguna</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-info pull-right">Log</span>
                <h5>Data Transaksi</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">275,800</h1>
                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                <small>Transaksi</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-primary pull-right">Option</span>
                <h5>Kategori</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">106,120</h1>
                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                <small>Kategori</small>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="label label-danger pull-right">Link</span>
                <h5>Link Rekomendasi</h5>
            </div>
            <div class="ibox-content">
                <h1 class="no-margins">80,600</h1>
                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                <small>Confirmed Link</small>
            </div>
        </div>
    </div>
</div>

@endsection