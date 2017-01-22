<div class="well">
  <h3>{{$post->title}}</h3>
  <h4>{{$post->created_at}}</h4>
  
  {{-- 
      L114: SHOWING IMG
   --}}
  <span><img src="{{ asset( 'photos/'.$post->image ) }}" alt=""></span>
  
  
  <p>
    {{substr($post->body,0,150)}} {{(strlen($post->body) > 150 ? " ..." : "" )}}
    <span>
  {{-- L39:CHANGE THE LINK 
  <a href="{{route('posts', $post->slug)}}" class="btn btn-default pull-right lg">Viewing the complete post</a>
  TO THE SLUG--}}
  <a href="{{route('slug', $post->slug)}}" class="btn btn-default pull-right lg">Viewing the complete post</a>
  </span>
  </p>
  {{-- 
      L130: IF TIS FAVORITES THAT GOOD 
      IF NOT ADD THE BUTTON TO ADD
   --}}
  @if(Auth::check())
  
    @if( $fave =  in_array( $post->id , $fav ))
      <form action="{{ route('removeFavorites', [Auth::user()->id, $post->id]) }}" method="POST">
        {{ method_field('DELETE') }}{{ csrf_field() }}
        
        <button type="submit" class="btn-fav">
          <i class="fa fa-heart-o {{ $fave ? 'fav' : 'not-fav' }}" aria-hidden="true"></i>
        </button>
      </form>
    @else
      <form action="{{ route('favorites.store', $post->id) }}" method="POST">
        {{ csrf_field() }}
        
        <button type="submit" class="btn-fav">
          <i class="fa fa-heart {{ $fave ? 'fav' : 'not-fav' }}" aria-hidden="true"></i>
        </button>
      </form>
    @endif
        
  @endif

</div>
<hr />