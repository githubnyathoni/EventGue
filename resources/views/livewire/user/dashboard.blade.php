<div>
    <div class="d-flex justify-content-center mt-5">
        <img src="{{ asset('lyc_logo3.png')}}" width="250px"/>
    </div>
    <div class="row mb-2">
        <div class="col-md-6 text-right">
            {!! QrCode::generate(Auth::user()->name); !!}
        </div>
        <div class="col-md-6">
            <h5 class="text-left">Selamat Datang,</h5>
            <p class="text-left">{{ Auth::user()->name }}</p>
            <p class="text-left">{{ Auth::user()->school }}</p>
        </div>
    </div>
    @if ($member == null)
      <button wire:click="joinGroup" type="button" class="btn btn-success mb-4"><i class="fa fa-plus"></i> Daftar Grup</button>
    @else
      <p class="mb-0">Nama Grup: {{$groupmember->grup->nama_grup}}</p>
      <p class="mb-0">Whatsapp Grup : </p>
      <small class="text-muted">Wajib masuk ke grup Whatsapp</small><br>
      <a href="{{url($groupmember->grup->link)}}" target="_blank" type="button" class="btn btn-sm btn-success mb-2"><i class="fa fa-whatsapp"></i> Gabung Grup Whatsapp</a>
    @endif
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Kelas</th>
            <th scope="col">Jadwal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{Auth::user()->kelas1->nama_kelas}}</td>
            <td>akan dikirim via Whatsapp</td>
          </tr>
          <tr>
            <td>{{Auth::user()->kelas2->nama_kelas}}</td>
            <td>akan dikirim via Whatsapp</td>
          </tr>
        </tbody>
      </table>
</div>
