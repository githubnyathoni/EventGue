<div>
    <div class="d-flex justify-content-center mt-5">
        <img src="<?php echo e(asset('lyc_logo3.png')); ?>" width="250px"/>
    </div>
    <div class="row mb-2">
        <div class="col-md-6 text-right">
            <?php echo QrCode::generate(Auth::user()->name);; ?>

        </div>
        <div class="col-md-6">
            <h5 class="text-left">Selamat Datang,</h5>
            <p class="text-left"><?php echo e(Auth::user()->name); ?></p>
            <p class="text-left"><?php echo e(Auth::user()->school); ?></p>
        </div>
    </div>
    <button type="button" class="btn btn-success mb-4"><i class="fa fa-whatsapp"></i> Gabung Grup Whatsapp</button>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Kelas</th>
            <th scope="col">Jadwal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo e($user->kelas1->nama_kelas); ?></td>
            <td>akan dikirim via Whatsapp</td>
          </tr>
          <tr>
            <td><?php echo e($user->kelas2->nama_kelas); ?></td>
            <td>akan dikirim via Whatsapp</td>
          </tr>
        </tbody>
      </table>
</div>
<?php /**PATH C:\xampp\htdocs\lyc\resources\views/livewire/user/dashboard-verified.blade.php ENDPATH**/ ?>