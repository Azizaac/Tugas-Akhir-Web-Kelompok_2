<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">

        <ul class="nav navbar-nav align-items-center ml-auto">

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name font-weight-bolder"><?php echo e(Auth::user()->name); ?></span>
                        <span class="user-status"><?php echo e(Auth::user()->role); ?></span>
                    </div>
                    <span class="avatar">
                        <?php if(Auth::user()->foto_profile == NULL): ?>
                            <img class="round" src="<?php echo e(asset('Assets/Backend/images/user.png')); ?>" alt="avatar" height="40" width="40">
                        <?php else: ?>
                            <img class="round" src="<?php echo e(asset('storage/images/profile/' .Auth::user()->foto_profile)); ?>" alt="avatar" height="40" width="40">
                        <?php endif; ?>
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="<?php echo e(route('profile-settings.index')); ?>"><i class="mr-50" data-feather="user"></i> Profile</a>
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Admin')): ?>
                    <a class="dropdown-item" href="<?php echo e(route('settings')); ?>"><i class="mr-50" data-feather="settings"></i> Settings</a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                         <i class="mr-50" data-feather="power"></i> Logout
                          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                              <?php echo csrf_field(); ?>
                          </form>
                        </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\laragon\www\sekolahku\resources\views/layouts/backend/header.blade.php ENDPATH**/ ?>