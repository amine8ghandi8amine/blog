<!DOCTYPE html>
<html lang="en">

<head>
   
  <?php echo $__env->make('partials/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>


<body id="paddingTopXL">
  <?php echo $__env->make('partials/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
  
  <?php echo $__env->make('partials/messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('partials/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
  <!-- Scripts -->
  <script src="/js/app.js"></script>
  
  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
  
  <script src="/js/select2/select2.min.js"></script>
  <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>