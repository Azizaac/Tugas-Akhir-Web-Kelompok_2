

<?php $__env->startSection('title'); ?>
    Visi dan Misi
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
                    <h2> Visi dan Misi</h2>
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
                                <div class="card-header header-bottom">
                                    <h4>Visi dan Misi</h4>
                                </div>
                                <div class="card-body">
                                    <?php if($visimisi == NULL): ?>
                                        <form action=" <?php echo e(route('backend-visimisi.store')); ?> " method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="basicInput">Gambar</label> <span class="text-danger">*</span>
                                                        <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" placeholder="image" />
                                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="invalid-feedback">
                                                            <strong><?php echo e($message); ?></strong>
                                                            </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            
                                                
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="basicInput">Visi</label> <span class="text-danger">*</span>
                                                        <textarea name="visi" class="form-control  <?php $__errorArgs = ['visi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="10"> <?php echo e(old('visi')); ?> </textarea>
                                                        <?php $__errorArgs = ['visi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="invalid-feedback">
                                                            <strong><?php echo e($message); ?></strong>
                                                            </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="basicInput">Misi</label> <span class="text-danger">*</span>
                                                        <textarea name="misi" class="form-control  <?php $__errorArgs = ['misi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="10"> <?php echo e(old('misi')); ?> </textarea>
                                                        <?php $__errorArgs = ['misi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="invalid-feedback">
                                                            <strong><?php echo e($message); ?></strong>
                                                            </div>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            <button class="btn btn-primary" type="submit">Tambah</button>
                                            <a href="<?php echo e(route('backend-visimisi.index')); ?>" class="btn btn-warning">Batal</a>
                                        </form>
                                    <?php else: ?>
                                    <form action=" <?php echo e(route('backend-visimisi.update', $visimisi->id)); ?> " method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="basicInput">Gambar</label> <span class="text-danger">*</span>
                                                    <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" placeholder="image" />
                                                    <small class="text-danger">Kosongkan jika tidak ingin diubah.</small>
                                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback">
                                                        <strong><?php echo e($message); ?></strong>
                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        
                                            
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="basicInput">Visi</label> <span class="text-danger">*</span>
                                                    <textarea name="visi" class="form-control  <?php $__errorArgs = ['visi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="10"> <?php echo e($visimisi->visi); ?> </textarea>
                                                    <?php $__errorArgs = ['visi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback">
                                                        <strong><?php echo e($message); ?></strong>
                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="basicInput">Misi</label> <span class="text-danger">*</span>
                                                    <textarea name="misi" class="form-control  <?php $__errorArgs = ['misi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="10"> <?php echo e($visimisi->misi); ?> </textarea>
                                                    <?php $__errorArgs = ['misi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback">
                                                        <strong><?php echo e($message); ?></strong>
                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                        <a href="<?php echo e(route('backend-visimisi.index')); ?>" class="btn btn-warning">Batal</a>
                                    </form>
                                    <?php endif; ?>
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nugwttbr/public_html/resources/views/backend/website/tentang/visiMisi.blade.php ENDPATH**/ ?>