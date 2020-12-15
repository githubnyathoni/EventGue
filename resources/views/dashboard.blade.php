@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{asset('css/image-picker.css') }}">
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d2d5dc;">
    <a href="\"><img class="navbar-brand" src="{{ asset('lyc_logo.png')}}"></a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hallo, {{ Auth::user()->name }}
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
      </div>
    </ul>
    </div>
</nav>

<div class="container">
  <div class="d-flex justify-content-center mt-5">
      <img src="{{ asset('lyc_logo2.png')}}" width="100px"/>
  </div>

  <div class="card mt-5 shadow bg-white rounded">
      <div class="card-header">
          <div class="d-flex justify-content-between">
              <p class="font-weight-bold mb-0">Pesanan Anda</p>
              <p class="font-weight-bold mb-0">Biaya</p>
          </div>
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
      </div>
  </div>

  <div class="card mt-5 mb-5 shadow bg-white rounded">
      <div class="card-body">
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Syarat dan Ketentuan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <ul>
                            <li><p class="text-justify">Lampung Youth Conference adalah program yang diinisiasi oleh Sanedu, Darmajaya dan Lampung Geh sebagai langkah untuk membantu meningkatkan kompetensi sumber daya manusia di Provinsi Lampung.</p></li>
                            <li><p class="text-justify">Program ini terbuka untuk semua siswa yang ada di Lampung, untuk bergabung sebagai member dari program ini siswa harus mendaftarkan diri melalui website Lampung Youth Conference terlebih dahulu, dan melakukan pembayaran biaya pendaftaran sebesar Rp. 25.000</p></li>
                            <li><p class="text-justify">Masa berlaku member hingga 30 juni 2021 dan jika siswa ingin memperpanjang dapat melakukan pendaftaran ulang dan membayar biaya pendaftaran yang sudah ditentukan panitia</p></li>
                            <li><p class="text-justify">Seluruh data siswa yang dimasukkan pada formulir pendaftaran menjadi hak panitia dan lembaga inisiator, dengan tetap menjaga kerahasiaan data tersebut. Lembaga inisiator berhak menggunakan data siswa untuk hal promosi produk dan layanannya tanpa harus membayar konpensasi apapun kepada panitia dan juga siswa yang bersangkutan.</p>
                          </ul>
                          <p class="text-justify">Dengan mendaftar program ini, maka siswa dianggap menyetujui seluruh syarat yang berlaku.</p>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
          <form method="POST" action="{{ route('order')}}">
            @csrf
              <h4 class="mt-2">Pilih metode pembayaran</h4>
              <select name="metode" class="image-picker show-html" required>
                  <option data-img-src="{{ asset('bni.jpg')}}" value="1">Cute Kitten 1</option>
                  <option data-img-src="{{ asset('bri.jpg')}}" value="2">Cute Kitten 1</option>
                  <option data-img-src="{{ asset('dana.jpg')}}" value="3">Cute Kitten 1</option>
                  <option data-img-src="{{ asset('gopay.jpg')}}" value="4">Cute Kitten 1</option>
              </select>
              <div class="form-check mt-2">
                  <input class="form-check-input" type="checkbox" name="snk" required>
                  <label class="form-check-label" for="defaultCheck1">
                      Dengan ini saya mendaftar dan menyetujui <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal"> Syarat dan Ketentuan</a> pengguna.
                  </label>
              </div> 
              <div class="row">
                  <div class="col">
                      <p class="font-weight-bold mt-2 mb-0">Total Bayar</p>
                      <h5>Rp. 25.000</h5>
                  </div>
                  <div class="col">
                      <button type="submit" class="btn btn-success btn-lg float-right">Bayar Sekarang</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>

@endsection

@section('scripts')
    <script src="{{asset('js/image-picker.js') }}"></script>
    <script src="{{asset('js/image-picker.min.js') }}"></script>
    <script>$("select").imagepicker()</script>
@endsection