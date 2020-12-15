@extends('layouts.master')
@section('content')
<div class="container">
    {{-- <div class="d-flex justify-content-center mt-5">
        <img src="{{ asset('logo_legacy.png')}}" width="100px"/>
    </div> --}}


    <div class="card mt-5 mb-5 shadow bg-white rounded">
        <div class="card-header">
            <p class="text-center mb-0">Sudah Punya Akun? <a href="{{route('login')}}">Login</a></p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-1 col-md-1">
                    <img src="{{ asset('lyc_logo2.png')}}" width="100px"/>
                </div>
                <div class="col col-md-9">
                    <p class="font-weight-bold">Lampung Youth Conference</p>
                </div>
                <div class="col col-md-2">
                    <p class="text-right font-weight-bold">Rp. 25.000</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col">
                    <p class="font-weight-bold text-left">Total</p>
                </div>
                <div class="col">
                    <p class="font-weight-bold text-right">Rp. 25.000</p>
                </div>
            </div>
            <hr>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h4>Informasi Pribadi</h4>
                <small>Isi data-data dibawah ini untuk informasi akses di website ini.</small>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama*</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah*</label>
                    <input type="text" name="school" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor WhatsApp*</label>
                    <input type="number" placeholder="628310507XXXX"class="form-control" name="handphone" required>
                </div>
                <h4>Informasi Akun</h4>
                <small class="mb-0">Informasi ini digunakan untuk login dan memanfaatkan fasilitas yang disediakan.</small>
                <small>Mohon informasi ini diingat/dicatat untuk menghindari hal-hal yang tidak diinginkan.</small>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Email*</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password*</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <label class="mr-sm-2">Kelas ke-I</label>
                    <select name="class" class="custom-select mr-sm-2" required>
                        <option value="" selected>Pilih kelas ke-I</option>
                        <option value="1">Kepemimpinan</option>
                        <option value="2">Bahasa</option>
                        <option value="3">Seni</option>
                        <option value="4">Multimedia</option>
                        <option value="5">Bisnis</option>
                        <option value="6">Perguruan Tinggi</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="mr-sm-2 mb-0">Kelas ke-II</label>
                    <small class="form-text text-muted mb-1">Pilih kelas yang berbeda dari kelas ke-I.</small>
                    <select name="class2" class="custom-select mr-sm-2" required>
                        <option value="" selected>Pilih kelas ke-II</option>
                        <option value="1">Kepemimpinan</option>
                        <option value="2">Bahasa</option>
                        <option value="3">Seni</option>
                        <option value="4">Multimedia</option>
                        <option value="5">Bisnis</option>
                        <option value="6">Perguruan Tinggi</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success btn-lg float-right">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
