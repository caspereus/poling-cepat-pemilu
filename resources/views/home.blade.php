@extends('templates.master')

@section('title','Dashboard')

@section('content')
<div class="row">
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper text-left icon ti-user"></span>
                <div class="wrapper">
                    <span class="text-muted">Caleg</span>
                    <h5>Caleg Terdaftar</h5>
                </div>
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_caleg }}</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-flag-alt-2"></span>
                <div class="wrapper">
                    <span class="text-muted">Partai</span>
                    <h5>Partai Terdaftar</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_partai }}</h2>
                </div>
            </div>
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-direction"></span>
                <div class="wrapper">
                    <span class="text-muted">TPS</span>
                    <h5>TPS Terdaftar</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_tps }}</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-user"></span>
                <div class="wrapper">
                    <span class="text-muted">Relawan</span>
                    <h5>Relawan Terdaftar</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_volunteer }}</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-hand-point-up"></span>
                <div class="wrapper">
                    <span class="text-muted">Pemilu</span>
                    <h5>Pemilu Terdaftar</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_pemilu_setting }}</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-map-alt"></span>
                <div class="wrapper">
                    <span class="text-muted">Provinsi</span>
                    <h5>Provinsi Terdaftar</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">9</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-map-alt"></span>
                <div class="wrapper">
                    <span class="text-muted">Kabupaten Kota</span>
                    <h5>Kabupaten Kota Terdaftar</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_kokab }}</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-map-alt"></span>
                <div class="wrapper">
                    <span class="text-muted">Kecamatan</span>
                    <h5>Kecamatan Terdaftar</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_kecamatan }}</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-map-alt"></span>
                <div class="wrapper">
                    <span class="text-muted">Kelurahan</span>
                    <h5>Kelurahan Terdaftar</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_kelurahan }}</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
    <div class="col-xs-4">
        <div class="panel panel-button">
            <a href="#!">
            <div class="panel-body" style="height:100px">
                <span class="wrapper icon ti-pulse"></span>
                <div class="wrapper">
                    <span class="text-muted">Transaksi</span>
                    <h5>Transaksi yg dilakukan</h5>
                </div><!-- panel-button--group -->
                <div class="wrapper text-right">
                    <h2 class="counter">{{ $total_transaction }}</h2>
                </div>
            </div><!-- panel-body -->
            </a>
        </div><!-- panel -->
    </div><!-- col -->
@endsection
