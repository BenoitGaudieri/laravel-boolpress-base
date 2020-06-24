@extends('layouts.main')

@section('content')
    <h1>Blog Archive</h1>

    @if (session("post-deleted"))
        <div class="alert alert-success">
            <p>Post deleted:</p>
            {{ session("post-deleted") }}
        </div>
        
    @endif
   
    @foreach ($posts as $post)
        <article>
            <h2 class="title text-primary mb-4">{{ $post->title }}</h2>
            <h4 class="author text-small">Author: {{ $post->user->name }} </h4>
            <h4>Created: {{$post->created_at}}, Last modified: {{ $post->updated_at }}</h4>
            <p>{{ $post->body }}</p>
            <a href="{{ route("posts.show", $post->slug) }}">Read More</a>
        </article>
        

        {{-- <div class="comments text-secondary">
            <span>Comments:</span>
            <ul>
                @foreach ($post->comments as $comment)
                <li>
                    <p>{{$comment->body}}</p>
                </li>
                
                @endforeach
                
            </ul>
        </div> --}}

        @if (! $loop->last)
            {{-- This is NOT the last iteration --}}
            <hr>
        @endif
        
    @endforeach

    <div class="wrap-pagination mt-5 d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
    