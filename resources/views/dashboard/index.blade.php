@extends('themes.admin-theme')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">people</i>
                </div>
                <p class="card-category"><strong>MITRA DRIVER</strong></p>
                <h3 class="card-title">2</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">store</i>
                </div>
                <p class="card-category"><strong>MITRA MERCHANT</strong></p>
                <h3 class="card-title">2</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-chart">
            <div class="card-header card-header-icon card-header-danger">
                <div class="card-icon">
                    <i class="material-icons">pie_chart</i>
                </div>
                <h4 class="card-title">Persentasi Pendaftar</h4>
            </div>
            <div class="card-body">
                <div id="chartPreferences" class="ct-chart"></div>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@include('dashboard.js.js-dashboard')
@stop