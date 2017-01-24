<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php echo e(config('app.name', 'Laravel')); ?></title>

<!-- Styles -->
<link href="/css/app.css" rel="stylesheet"> 


<link href="/css/select2/select2.min.css" rel="stylesheet">


<link href="/css/fontAwsome/font-awesome.min.css" rel="stylesheet">


<link href="/css/cust.css" rel="stylesheet">
<!-- Scripts -->
<script>
  window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
</script>