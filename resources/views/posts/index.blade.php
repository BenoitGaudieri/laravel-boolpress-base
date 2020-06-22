@extends('layouts.main')

@section('content')
    <h1>Blog Archive</h1>
   
    @foreach ($posts as $post)
        <article>
            <h2 class="title text-primary">{{ $post->title }}</h2>
            <h4 class="author text-small">Author: {{ $post->user->name }} </h4>
            <h4>Created: {{$post->created_at}}, Last modified: {{ $post->updated_at }}</h4>
            <p>{{ $post->body }}</p>
        </article>

        @if (! $loop->last)
            {{-- This is NOT the last iteration --}}
            <hr>
        @endif
        
    @endforeach

    <h4>Navigation</h4>
    {{ $posts->links() }}

@endsection
    