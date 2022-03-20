@extends('themes.admin-theme')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">people</i>
                </div>
                <h4 class="card-title"> Detail Data registrasi</h4>
            </div>
            <hr>
            <div class="card-body">
                <div class="material-datatables">
                    <strong><h3>Data Diri</h3></strong>
                    <table class="table">
                        <tr>
                            <th>NIK</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Nama lengkap</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th width="200">Tempat, Tanggal Lahir</th>
                            <th width="20">:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>RT</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>RW</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Jenis Mitra</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                    </table>
                    <!-- <strong><h3>Data Berkas</h3></strong>
                    <table class="table">
                        <tr>
                            <th>Foto Diri</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Foto KTP</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>No STNK</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Foto STNK</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>No SIM</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Foto SIM</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Bank</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>Pemilik</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th>No Rekening</th>
                            <th>:</th>
                            <th>111224551240001</th>
                        </tr>
                        <tr>
                            <th width="200">Foto Buku Rekening</th>
                            <th width="20">:</th>
                            <th>111224551240001</th>
                        </tr>
                    </table> -->
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