 <?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">


      <?php if($posts->count()): ?> 
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
          <?php echo $__env->make('partials/post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
      <?php else: ?>
      <div class="jumbotron">
        <p>No post right know try to add one</p>
      </div>
      <?php endif; ?>

    </div>
    <hr />

    <div class="row">
      <div class="col-md-6 col-md-offset-5">
        <?php echo $posts->links(); ?>

      </div>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>