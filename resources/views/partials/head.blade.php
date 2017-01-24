<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Styles -->
<link href="/css/app.css" rel="stylesheet"> 

{{--L71: ADDING THE MAIN CSS OF THE select2 --}}
<link href="/css/select2/select2.min.css" rel="stylesheet">

{{--L135: INCLUDE font awsome --}}
<link href="/css/fontAwsome/font-awesome.min.css" rel="stylesheet">

{{--L11: ADDING A CUSTOM CSS AND CREATING HIS PATH public/css/cust.css--}}
<link href="/css/cust.css" rel="stylesheet">
<!-- Scripts -->
<script>
  window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
</script>