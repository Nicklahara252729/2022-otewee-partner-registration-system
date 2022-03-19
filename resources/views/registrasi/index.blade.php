@extends('themes.admin-theme')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">people</i>
                </div>
                <h4 class="card-title">Data registrasi</h4>
            </div>
            <hr>
            <div class="card-body">
                <div class="material-datatables">
                    @include('registrasi.table.tbl-registrasi')
                </div>
            </div>
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
</div>
@endsection
@section('js')
@include('registrasi.js.js-registrasi')
@stop