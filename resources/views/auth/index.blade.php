@extends('themes.auth-theme')
@section('content')
@include('themes.auth-element.header')
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('assets/img/bg-otewee.png'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="wizard-container" >
                <div class="card card-wizard" data-color="rose" id="wizardProfile" style="margin-top:90px;">
                    <form action="#" method="">
                        <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                        <div class="card-header text-center">
                            <h3 class="card-title">
                                Pendaftaran Mitra Otewee
                            </h3>
                            <h5 class="card-description">Harap mengisi dengan data lengkap yang benar.</h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#about" data-toggle="tab" role="tab">
                                        Data diri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#account" data-toggle="tab" role="tab">
                                        Berkas pendukung
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="about">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="picture-container">
                                                        <div class="picture">
                                                            <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                            <input type="file" id="wizard-picture">
                                                        </div>
                                                        <h6 class="description">Pilih Gambar</h6>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option> Pilih Jenis Mitra</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInput1" class="bmd-label-floating">Nama Lengkap</label>
                                                            <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option> Pilih Jenis Kelamin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInput1" class="bmd-label-floating">Tempat Lahir</label>
                                                            <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInput1" class="bmd-label-floating">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="exampleInput1" name="firstname">
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInput1" class="bmd-label-floating">Alamat</label>
                                                            <input type="email" class="form-control" id="exampleemalil" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option> Pilih Provinsi</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option> Pilih Kabupaten / Kota</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option> Pilih Kecamatan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option> Pilih Desa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInput1" class="bmd-label-floating">RT</label>
                                                            <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                        </div>
                                                    </div>
                                                    <div class="input-group form-control-lg">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="material-icons">edit</i>
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInput1" class="bmd-label-floating">RW</label>
                                                            <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="account">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="picture-container">
                                                                <div class="picture">
                                                                    <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                                    <input type="file" id="wizard-picture">
                                                                </div>
                                                                <h6 class="description">Upload KTP</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="input-group form-control-lg">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInput1" class="bmd-label-floating">Masukan No NIK</label>
                                                                    <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="picture-container">
                                                                <div class="picture">
                                                                    <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                                    <input type="file" id="wizard-picture">
                                                                </div>
                                                                <h6 class="description">Upload SIM</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="input-group form-control-lg">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInput1" class="bmd-label-floating">Masukan No SIM</label>
                                                                    <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="picture-container">
                                                                <div class="picture">
                                                                    <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                                    <input type="file" id="wizard-picture">
                                                                </div>
                                                                <h6 class="description">Upload STNK</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="input-group form-control-lg">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInput1" class="bmd-label-floating">Masukan No STNK</label>
                                                                    <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="picture-container">
                                                                <div class="picture">
                                                                    <img src="../../assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                                                    <input type="file" id="wizard-picture">
                                                                </div>
                                                                <h6 class="description">Upload Buku Rekening</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="input-group form-control-lg">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInput1" class="bmd-label-floating">Nama Bank</label>
                                                                    <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                                </div>
                                                            </div>
                                                            <div class="input-group form-control-lg">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInput1" class="bmd-label-floating">No Rekening</label>
                                                                    <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                                </div>
                                                            </div>
                                                            <div class="input-group form-control-lg">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">
                                                                        <i class="material-icons">edit</i>
                                                                    </span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInput1" class="bmd-label-floating">Pemilik</label>
                                                                    <input type="text" class="form-control" id="exampleInput1" name="firstname">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="picture-container">
                                                                <div class="picture">
                                                                    <img src="../../assets/img/image_placeholder.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                                                                    <input type="file" id="wizard-picture">
                                                                </div>
                                                                <h6 class="description">Sertifikat Vaksin 1</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="picture-container">
                                                                <div class="picture">
                                                                    <img src="../../assets/img/image_placeholder.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                                                                    <input type="file" id="wizard-picture">
                                                                </div>
                                                                <h6 class="description">Sertifikat Vaksin 2</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mr-auto">
                                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
                            </div>
                            <div class="ml-auto">
                                <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Next">
                                <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('themes.auth-element.footer')
    </div>
</div>
@endsection