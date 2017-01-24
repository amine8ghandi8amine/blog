<!DOCTYPE html>
<html lang="en">

<head>
  {{-- L17: CUTTING THE HEAD SECTION AND INCLUDIT FROM resources/view/partials/head.blade.php --}} 
  @include('partials/head')
</head>
{{-- L10:REMOVING THE div class=app FROM THE BODY * AND ADD AN id TO THE BODY WE CALL IT paddingTopXL * AND CUTTING THE HALL navbar * AND PASTIT INTO resource/view/partials/ navbar.blade.php * AND INCLUDE THE NAVBAR--}}

<body id="paddingTopXL">
  @include('partials/navbar') 
  {{-- 
    L136: 
   --}}
  @include('partials/messages')
  @yield('content')

  @include('partials/footer') 
  <!-- Scripts -->
  <script src="/js/app.js"></script>
  {{-- L69: ADDING THE JQuery 2.2.4 CDN FOR select2--}}
  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
  {{-- L70: INCLUDE THE MAIN CODE OF select2 
  AND INCLUDING A SCRIPT IF WE WANT 
  TO INCLUDE SOMETHING THAT WORK WITH select2.js --}}
  <script src="/js/select2/select2.min.js"></script>
  @yield('scripts')
</body>

</html>