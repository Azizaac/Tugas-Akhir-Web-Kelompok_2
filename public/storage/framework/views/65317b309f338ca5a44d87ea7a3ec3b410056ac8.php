

<?php $__env->startSection('title'); ?>
    Pengajar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success" role="alert">
            <div class="alert-body">
                <strong><?php echo e($message); ?></strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    <?php elseif($message = Session::get('error')): ?>
        <div class="alert alert-danger" role="alert">
            <div class="alert-body">
                <strong><?php echo e($message); ?></strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    <?php endif; ?>
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2> Pengajar</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <section>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Pengajar <a href=" <?php echo e(route('backend-pengguna-pengajar.create')); ?> " class="btn btn-primary">Tambah</a> </h4>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-responsive table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Mengajar</th>
                                                <th>NIP</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>    
                                        <tbody>
                                           <?php $__currentLoopData = $pengajar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pengajars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td></td>
                                                    <td> <?php echo e($key+1); ?> </td>
                                                    <td> <?php echo e($pengajars->name); ?> </td>
                                                    <td> <?php echo e($pengajars->userDetail->mengajar); ?> </td>
                                                    <td> <?php echo e($pengajars->userDetail->nip); ?> </td>
                                                    <td> <?php echo e($pengajars->email); ?> </td>
                                                    <td> <?php echo e($pengajars->status == 'Aktif' ? 'Aktif' : 'Tidak Aktif'); ?> </td>
                                                    <td><a href=" <?php echo e(route('backend-pengguna-pengajar.edit', $pengajars->id)); ?> " class="btn btn-success btn-sm">Edit</a></td>
                                                </tr>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>                                   
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nugwttbr/public_html/resources/views/backend/pengguna/pengajar/index.blade.php ENDPATH**/ ?>