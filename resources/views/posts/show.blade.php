@extends('layouts.main')

@section('content')
    <h1 class="mb-4">{{ $post->title }}</h1>
    {{-- edit button --}}
    <a class="btn btn-sm btn-primary" href="{{ route("posts.edit", $post->id )}}">Edit</a>
    {{-- delete --}}
    <form class="d-inline" action="{{ route("posts.destroy", $post->id) }}" method="POST">
        @csrf
        @method("DELETE")
        
        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
    </form>
    <a class="text-danger" href="{{ route("posts.edit", $post->id )}}">Edit</a>

    <p>{{ $post->body }}</p>

    <div class="wrap-tags mt-5">
        <h4>Tags</h4>
        @forelse ($post->tags as $tag)
            <span class="badge badge-pill badge-primary">{{ $tag->name }}</span>            
        @empty
            <p>no tags</p>
        @endforelse
    </div>


    <div class="comments text-secondary">
        <span>Comments:</span>
        <ul>
            @foreach ($post->comments as $comment)
            <li>
                <p>{{$comment->body}}</p>
            </li>
            
            @endforeach
        </ul>
    </div>
   


@endsection
    