@extends('themes.auth-theme')
@section('content')
@include('themes.auth-element.header')
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('assets/img/img_otewee_driver.png'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
                <div class="card card-login card-hidden">
                    <div class="card-body text-center">
                        <center>
                            <h3>Pendaftaran telah selesai. Terima kasih telah mendaftar, kami akan segera memeriksa data dan berkas anda</h3>
                        </center>
                    </div>
                    <div class="card-footer justify-content-center">

                    </div>
                </div>
            </div>
        </div>
        @include('themes.auth-element.footer')
    </div>
</div>
@endsection