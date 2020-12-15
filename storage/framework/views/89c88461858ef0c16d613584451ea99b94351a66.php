<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" data-toggle="modal" data-target="#buatGrup" class="btn btn-info" style="color:white;" data-toggle="tooltip" data-placement="top" title="Ubah Password"><i class="fa fa-plus"></i> Buat Grup</button>
                        <div class="modal" id="buatGrup" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Buat Grup</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label for="password" class="col-form-label">Nama</label>
                                        <input placeholder="Masukkan Nama Grup" type="text" wire:model.defer="nama_grup" class="form-control mt-2" required>
                                    </div>
                                    <div class="modal-body">
                                        <label for="password" class="col-form-label">Kuota</label>
                                        <input placeholder="Masukkan Kuota Anggota Grup" type="number" wire:model.defer="kuota" class="form-control mt-2" required>
                                    </div>
                                    <div class="modal-body">
                                        <label for="password" class="col-form-label">Link Whatsapp Grup</label>
                                        <input placeholder="Masukkan Link WA Grup" type="text" wire:model.defer="link" class="form-control mt-2" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Batal</button>
                                        <button wire:click="buatGrup" type="submit" class="btn btn-success" data-dismiss="modal">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-body">
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if($message = Session::get('reject')): ?>
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong><?php echo e($message); ?></strong>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>Nama Grup</th>
                                <th>Anggota</th>
                                <th>Kuota</th>
                                <th>Link Whatsapp</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($group->nama_grup); ?></td>
                                    <td><?php echo e(count($group->members)); ?></td>
                                    <td><?php echo e($group->kuota); ?></td>
                                    <td>
                                        <a href="<?php echo e(url($group->link)); ?>" target="_blank" type="button" class="btn btn-sm btn-success mb-2"><i class="fa fa-whatsapp"></i></a>
                                    </td>
                                    <td>
                                        <button  type="button"  class="btn btn-info" style="color:white;" data-toggle="modal" data-target="#anggota<?php echo e($group->id); ?>" data-toggle="tooltip" data-placement="top" title="Detail Anggota"><i class="fa fa-eye"></i></button>
                                        <div class="modal" id="anggota<?php echo e($group->id); ?>" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail Grup</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class=" text-primary">
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>No Whatsapp</th>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $__empty_2 = true; $__currentLoopData = $group->members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                                        <td><?php echo e($loop->iteration); ?></td>
                                                                        <td><?php echo e($member->user->name); ?></td>
                                                                        <td><?php echo e($member->user->phone); ?></td>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                                        <td colspan="3" class="text-center">Data Tidak Tersedia</td>
                                                                    <?php endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <td colspan="6" class="text-center">Data Tidak Tersedia</td>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\lyc\resources\views/livewire/admin/grup.blade.php ENDPATH**/ ?>