
<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d2d5dc;">
    <a href="\"><img class="navbar-brand" src="<?php echo e(asset('lyc_logo.png')); ?>"></a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hallo, <?php echo e(Auth::user()->name); ?>

      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
      </div>
    </ul>
    </div>
</nav>

<div class="container text-center">
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.dashboard')->html();
} elseif ($_instance->childHasBeenRendered('mrQgB27')) {
    $componentId = $_instance->getRenderedChildComponentId('mrQgB27');
    $componentTag = $_instance->getRenderedChildComponentTagName('mrQgB27');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('mrQgB27');
} else {
    $response = \Livewire\Livewire::mount('user.dashboard');
    $html = $response->html();
    $_instance->logRenderedChild('mrQgB27', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lyc\resources\views/dashboard-verified.blade.php ENDPATH**/ ?>