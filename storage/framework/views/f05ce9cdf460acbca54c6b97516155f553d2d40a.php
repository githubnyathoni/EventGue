<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong><?php echo e($message); ?></strong>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Nama</th>
                            <th>Sekolah</th>
                            <th>Email</th>
                            <th>No Handphone</th>
                            <th>Kelas ke-I</th>
                            <th>Kelas ke-2</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->school); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->phone); ?></td>
                                    <td><?php echo e($user->kelas1->nama_kelas); ?></td>
                                    <td><?php echo e($user->kelas2->nama_kelas); ?></td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#change_password<?php echo e($user->id); ?>" class="btn btn-info" style="color:white;" data-toggle="tooltip" data-placement="top" title="Ubah Password"><i class="fa fa-lock"></i></button>
                                        <div class="modal" id="change_password<?php echo e($user->id); ?>" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ubah Password</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label for="password" class="col-form-label">Masukkan Password Baru:</label>
                                                        <input placeholder="Masukkan Password" type="password" wire:model.defer="new_pass" class="form-control mt-2">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Batal</button>
                                                        <button wire:click="change(<?php echo e($user->id); ?>)"  class="btn btn-success" data-dismiss="modal">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-toggle="modal" data-target="#delete_user<?php echo e($user->id); ?>" class="btn btn-danger" style="color:white;" data-toggle="tooltip"   data-placement="top" title="Hapus User"><i class="fa fa-trash"></i></button>
                                        <div class="modal" id="delete_user<?php echo e($user->id); ?>" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                <p>Apakah anda yakin akan menghapus <span class="font-weight-bold"><?php echo e($user->name); ?>?</span></p>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Close</button>
                                                <button type="button" wire:click="delete(<?php echo e($user->id); ?>)" class="btn btn-primary" data-dismiss="modal">Yakin</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <td colspan="7" class="text-center">Data Tidak Terserdia</td>
                            <?php endif; ?>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\lyc\resources\views/livewire/admin/pengguna.blade.php ENDPATH**/ ?>