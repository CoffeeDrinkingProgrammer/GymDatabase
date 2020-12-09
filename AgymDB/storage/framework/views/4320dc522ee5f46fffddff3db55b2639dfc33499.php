<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        California Fitness Gym
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="/">
<!-- ICONS CODE -->
                <!-- <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg> -->
                Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
<!-- ICONS CODE -->
                <!-- <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg>-->
                Logout
            </a>
        </li>
    </ul>
</div>

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
    <?php echo csrf_field(); ?>
</form><?php /**PATH C:\xampp\htdocs\finalproject\GymDatabase\AgymDB\resources\views/partials/menu.blade.php ENDPATH**/ ?>