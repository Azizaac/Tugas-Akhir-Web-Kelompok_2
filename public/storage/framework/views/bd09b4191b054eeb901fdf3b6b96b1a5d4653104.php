

<?php $__env->startSection('title'); ?>
    Berita
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
                    <h2> Berita</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <section>
                    <div class="row">
                        <?php if($kategori->count() > 0): ?>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Berita <a href=" <?php echo e(route('backend-berita.create')); ?> " class="btn btn-primary">Tambah</a> </h4>
                                    </div>
                                    <div class="card-datatable">
                                        <table class="dt-responsive table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Thumbnail</th>
                                                    <th>Kategori</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $beritas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td></td>
                                                        <td> <?php echo e($key+1); ?> </td>
                                                        <td> <?php echo e($beritas->title); ?> </td>
                                                        <td> 
                                                            <img src="<?php echo e(asset('storage/images/berita/' .$beritas->thumbnail)); ?>" class="img-responsive" style="max-width: 50px; max-height:50px"> 
                                                        </td>
                                                        <td> <?php echo e($beritas->kategori->nama); ?> </td>
                                                        <td> <?php echo e($beritas->is_active == '0' ? 'Publish' : 'Draft'); ?> </td>
                                                        <td>
                                                            <a href=" <?php echo e(route('backend-berita.edit', $beritas->id)); ?> " class="btn btn-success btn-sm">Edit</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>                                   
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <h3>Kategori Masih Kosong !</h3>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sekolahku\resources\views/backend/website/content/berita/index.blade.php ENDPATH**/ ?>