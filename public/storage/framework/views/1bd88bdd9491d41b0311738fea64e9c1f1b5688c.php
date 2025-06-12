

<?php $__env->startSection('title'); ?>
   Edit Pengajar
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
                <div class="card">
                    <div class="card-header header-bottom">
                        <h4>Edit Pengajar</h4>
                    </div>
                    <div class="card-body">
                        <form action=" <?php echo e(route('backend-pengguna-pengajar.update', $pengajar->id)); ?> " method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama</label> <span class="text-danger">*</span>
                                        <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value=" <?php echo e($pengajar->name); ?> " placeholder="Nama" />
                                        <?php $__errorArgs = ['name'];
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
                                        <label for="basicInput">Email</label> <span class="text-danger">*</span>
                                        <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value=" <?php echo e($pengajar->email); ?> " placeholder="Email" />
                                        <?php $__errorArgs = ['email'];
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
        <label for="basicInput">Mengajar</label> <span class="text-danger">*</span>
        <select name="mengajar" class="form-control <?php $__errorArgs = ['mengajar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <option value="">-- Pilih --</option>
            <option value="Matematika" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Matematika' ? 'selected' : ''); ?>>Matematika</option>
            <option value="Sejarah" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Sejarah' ? 'selected' : ''); ?>>Sejarah</option>
            <option value="Bahasa Indonesia" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Bahasa Indonesia' ? 'selected' : ''); ?>>Bahasa Indonesia</option>
            <option value="Bahasa Inggris" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Bahasa Inggris' ? 'selected' : ''); ?>>Bahasa Inggris</option>
            <option value="Bahasa Jawa" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Bahasa Jawa' ? 'selected' : ''); ?>>Bahasa Jawa</option>
            <option value="Bimbingan Konseling" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Bimbingan Konseling' ? 'selected' : ''); ?>>Bimbingan Konseling (BK)</option>
            <option value="Produk Kreatif dan Kewirausahaan" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Produk Kreatif dan Kewirausahaan' ? 'selected' : ''); ?>>Produk Kreatif dan Kewirausahaan (PKKWU)</option>
            <option value="Pendidikan Pancasila" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Pendidikan Pancasila' ? 'selected' : ''); ?>>Pendidikan Pancasila</option>
            <option value="Pendidikan Agama dan Budi Pekerti" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Pendidikan Agama dan Budi Pekerti' ? 'selected' : ''); ?>>Pendidikan Agama dan Budi Pekerti</option>
            <option value="PJOK" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'PJOK' ? 'selected' : ''); ?>>Pendidikan Jasmani, Olahraga, dan Kesehatan (PJOK)</option>
            <option value="" disabled>------</option>
            <option value="Desain Pemodelan dan Informasi Bangunan (DPIB)" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Desain Pemodelan dan Informasi Bangunan (DPIB)' ? 'selected' : ''); ?>>Desain Pemodelan dan Informasi Bangunan (DPIB)</option>
            <option value="Teknik Konstruksi dan Perumahan (TKP)" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Konstruksi dan Perumahan (TKP)' ? 'selected' : ''); ?>>Teknik Konstruksi dan Perumahan (TKP)</option>
            <option value="Teknik Mesin (TM)" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Mesin (TM)' ? 'selected' : ''); ?>>Teknik Mesin (TM)</option>
            <option value="Teknik Kendaraan Ringan Otomotif (TKRO)" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Kendaraan Ringan Otomotif (TKRO)' ? 'selected' : ''); ?>>Teknik Kendaraan Ringan Otomotif (TKRO)</option>
            <option value="Teknik dan Bisnis Sepeda Motor" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik dan Bisnis Sepeda Motor' ? 'selected' : ''); ?>>Teknik dan Bisnis Sepeda Motor</option>
            <option value="Teknik Elektronika Industri" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Elektronika Industri' ? 'selected' : ''); ?>>Teknik Elektronika Industri</option>
            <option value="Teknik Ketenagalistrikan (TK)" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Ketenagalistrikan (TK)' ? 'selected' : ''); ?>>Teknik Ketenagalistrikan (TK)</option>
            <option value="Teknik Otomasi Industri (TOI)" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Teknik Otomasi Industri (TOI)' ? 'selected' : ''); ?>>Teknik Otomasi Industri (TOI)</option>
            <option value="Pengembangan Perangkat Lunak dan Gim (PPLG)" <?php echo e(old('mengajar', $pengajar->userDetail->mengajar ?? '') == 'Pengembangan Perangkat Lunak dan Gim (PPLG)' ? 'selected' : ''); ?>>Pengembangan Perangkat Lunak dan Gim (PPLG)</option>
        </select>
        <?php $__errorArgs = ['mengajar'];
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
                                        <label for="basicInput">NIP</label> <span class="text-danger">*</span>
                                        <input type="text" class="form-control <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nip" value=" <?php echo e($pengajar->userDetail->nip); ?> " placeholder="NIP" />
                                        <?php $__errorArgs = ['nip'];
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
                                        <label for="basicInput">Foto Profile</label>  <span class="text-danger">*</span>
                                        <input type="file" class="form-control <?php $__errorArgs = ['foto_profile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="foto_profile"/>
                                        <small class="text-danger">Kosongkan jika tidak ingin mengubah.</small>
                                        <?php $__errorArgs = ['foto_profile'];
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
                                        <label for="basicInput">Status</label> <span class="text-danger">*</span>
                                        <select name="status" class="form-control <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <option value="Aktif" <?php echo e($pengajar->status == 'Aktif' ? 'selected' : ''); ?> >Aktif</option>
                                            <option value="Tidak Aktif" <?php echo e($pengajar->status == 'Tidak Aktif' ? 'selected' : ''); ?> >Tidak Aktif</option>
                                        </select>
                                        <?php $__errorArgs = ['status'];
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

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Website</label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="website" value=" <?php echo e($pengajar->userDetail->website); ?> " placeholder="Website" />
                                        <?php $__errorArgs = ['website'];
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

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Linkedln</label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['linkedln'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="linkedln" value=" <?php echo e($pengajar->userDetail->linkidln); ?> " placeholder="Linkedln" />
                                        <?php $__errorArgs = ['linkedln'];
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

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Instagram</label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['instagram'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="instagram" value=" <?php echo e($pengajar->userDetail->instagram); ?> " placeholder="Instagram" />
                                        <?php $__errorArgs = ['instagram'];
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

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Facebook</label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['facebook'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="facebook" value=" <?php echo e($pengajar->userDetail->facebook); ?> " placeholder="Facebook" />
                                        <?php $__errorArgs = ['facebook'];
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

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Youtube</label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['youtube'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="youtube" value=" <?php echo e($pengajar->userDetail->youtube); ?> " placeholder="Youtube" />
                                        <?php $__errorArgs = ['youtube'];
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

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Twitter</label>
                                        <input type="text" class="form-control <?php $__errorArgs = ['twitter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="twitter" value=" <?php echo e($pengajar->userDetail->twitter); ?> " placeholder="Twitter" />
                                        <?php $__errorArgs = ['twitter'];
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
                            <a href="<?php echo e(route('backend-pengguna-pengajar.index')); ?>" class="btn btn-warning">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sekolahku\resources\views/backend/pengguna/pengajar/edit.blade.php ENDPATH**/ ?>