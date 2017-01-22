@extends('layouts.app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">


      @if($posts->count()) 
        @foreach($posts as $post) 
          @include('partials/post') 
        @endforeach 
      @else
      <div class="jumbotron">
        <p>No post right know try to add one</p>
      </div>
      @endif

    </div>
    <hr />

    <div class="row">
      <div class="col-md-6 col-md-offset-5">
        {!!$posts->links()!!}
      </div>
    </div>

  </div>
</div>
@endsection