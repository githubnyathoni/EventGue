@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{asset('css/image-picker.css') }}">
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-light">
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

    <p class="font-weight-bold mt-4">Hallo, {{ Auth::user()->name }}</p>
    <p class="mb-0">Terima kasih banyak untuk pemesanannya.</p>
    <p>Data pemesanan kamu sudah kami terima!</p>
    <p class="font-weight-bold mt-4">Cek Pesanan Kamu</p>

    <div class="card mt-2 shadow bg-white rounded">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <p class="font-weight-bold mb-0">Produk yang dibeli</p>
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

    <hr class="mt-5">

    <div class="d-flex justify-content-between">
        <p class="font-weight-bold">Transfer ke</p>
        <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#exampleModal">Ganti Metode Pembayaran</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ganti Metode Pembayaran</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <p>Pilih metode pembayaran</p>
                    <form action="/gantimethod" method="POST">
                    @csrf
                    <select  name="metode" class="image-picker show-html">
                        <option data-img-src="{{ asset('bni.jpg')}}" value="1">Cute Kitten 1</option>
                        <option data-img-src="{{ asset('bri.jpg')}}" value="2">Cute Kitten 1</option>
                        <option data-img-src="{{ asset('dana.jpg')}}" value="3">Cute Kitten 1</option>
                        <option data-img-src="{{ asset('gopay.jpg')}}" value="4">Cute Kitten 1</option>
                    </select>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
    </div>
    
    <table class="table table-striped table-bordered table-hover bg-light">
        <tbody>
          <tr>
            <td>Nomor Rekening</td>
            <td><p id="norek">{{$payment->norek}}</p></td>
            <td><a href="#" onclick="copyElementText('norek')">Copy</a></td>
          </tr>
          <tr>
            <td>ke Bank</td>
            <td>{{$payment->metode}} a.n. {{$payment->nama}}</td>
          </tr>
          <tr>
            <td>Total Biaya</td>
            <td><p id="jumlah">25000</p></td>
            <td><a href="#" onclick="copyElementText('jumlah')">Copy</a></td>
          </tr>
        </tbody>
    </table>

    <p class="font-weight-bold mt-2">Catatan</p>
    <ul>
        <li>Setelah melakukan konfirmasi pembayaran, verifikasi pesanan Anda akan kami proses dalam 60 menit dan selambat-lambatnya 1x24 jam.</li>
        <li>Pembayaran diatas jam 21:00 WIB akan diproses hari berikutnya.</li>
        <li>Data pembelian dan petunjuk pembayaran juga sudah kami kirim ke email Anda, silakan cek email dari kami di inbox, promotion, dan atau di folder spam.</li>
        <li>Hubungi kami jika anda memiliki kendala atau pertanyaan terkait pembayaran. <a href="https://api.whatsapp.com/send/?phone=6287895493904&text=Halo%21+Saya+membutuhkan+bantuan+terkait+pembayaran+Sanedu." target="_blank" type="button" class="btn btn-primary btn-sm mt-2 justify-center">Bantuan</a></li>
    </ul>
    
    <hr class=" mb-5">
    <p>
        <strong>Wajib: </strong>Setelah melakukan transfer pembayaran, harap verifikasi pembayaran kamu melalui halaman ini:
    </p>
    <a type="button" href="/verifikasi" class="btn btn-success btn-lg btn-block mb-5">VERIFIKASI PEMBAYARAN</a>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/image-picker.js') }}"></script>
    <script src="{{asset('js/image-picker.min.js') }}"></script>
    <script>$("select").imagepicker()</script>
    <script>
        function copyElementText(id) {
            var text = document.getElementById(id).innerText;
            var elem = document.createElement("textarea");
            document.body.appendChild(elem);
            elem.value = text;
            elem.select();
            document.execCommand("copy");
            alert("Berhasil dicopy: " + elem.value);
            document.body.removeChild(elem);
        }
    </script>
 @endsection
@section('scripts')
    <script src="{{asset('js/image-picker.js') }}"></script>
    <script src="{{asset('js/image-picker.min.js') }}"></script>
    <script>$("select").imagepicker()</script>
@endsection
