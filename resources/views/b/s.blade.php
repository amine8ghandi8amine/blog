{{--L27: CREATING THE VIEW FOR FETCHING A FORM --}} 
@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="text-center">{{ $post->title }}</h2>
            
            {{-- 
                L121: SHOWING IMG
            --}}
            <span><img src="{{ asset( 'photos/'.$post->image ) }}" alt=""></span>
            
            <div class="col-md-12">
                <p class="lead">{!!$post->body!!}</p>
            </div>
        </div>
        {{-- 
        L150: UI COMMENTS
         --}}
        <div class="col-md-8" id="commentsForm">
            <h1>Tell us what you think</h1>
            <form action="{{ route('comments.store', $post->id) }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name :</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">E-mail: </label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="comment" class="col-md-4 control-label">Comment here: </label>
                        <textarea class="form-control col-md-8" name="comment" /></textarea>
                        
                    </div>
                    <button type="Submit" name="submitComment" class="btn btn-default btn-block">Add comment</button>
                </div>
                
            </form>
        </div>
        
        <div class="col-md-8">
            <h2>Number of comments<span><small>{{ $post->comment->count() }}</small></span></h2>
            @foreach($post->comment as $comment)
            
                <div class="comment">
                    <div class="author">
                        <img src="{{ Identicon::getImageDataUri( $comment->email ) }}" alt="bar Identicon" class="authorImg" />
                        <div class="authorName">
                            <h3>{{ $comment->name }}</h3>
                            <small>{{ $comment->created_at }}</small>
                        </div>
                    </div>
                    <div class="commentBody">
                        {{ strip_tags( $comment->comment ) }}
                    </div>
                </div>
            @endforeach
        </div>
        
        
        
        
        
        
        
        
        
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Added On:</dt>
                    <dd>{{$post->created_at}}</dd>
                </dl>
            </div>
            
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Updated At:</dt>
                    <dd>{{$post->updated_at}}</dd>
                </dl>
            </div>
            
            {{-- L67: ADDING THE SHOW FOR TAGS --}}
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Tags:</dt>
                    <dd>
                    <ul>
                    @foreach($post->tags as $tag)
                    
                        <li class="label label-default">{{ $tag->name }}</li>
                    
                    @endforeach
                    </ul>
                    </dd>
                </dl>
            </div>
            
            
            {{-- L87.9: ADDING THE SHOW FOR CATS --}}
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Categories:</dt>
                    <dd>
                    <ul>
                    @foreach($post->categories as $category)
                    
                        <li class="label label-default"><a href="{{ route('categories.show', $category->id) }}" class="">{{ $category->name }}</a></li>
                    
                    @endforeach
                    </ul>
                    </dd>
                </dl>
            </div>
            
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Slug:</dt>
                    <dd><a href="{{ route('posts.edit', $post->slug) }}"></a>{{$post->slug}}</dd>
                </dl>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    
                    <div class="col-sm-6">
                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <input type="submit" value="Delete" class="btn btn-primary btn-block">
                        </form>
                    </div>
               </div>
                
                
            </div>
            
            <hr />
            
            <div class="col-sm-12">
                <a href="" class="btn btn-primary btn-block">All posts</a>
            </div>
        </div>
    </div>
</div>
@stop 