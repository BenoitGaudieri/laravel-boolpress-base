@extends('layouts.main')

@section('content')
    <h1 class="mb-8">Welcome to the DB Extravaganza!</h1>
    <p>
        So far we have a 1 to 1 relationship <a href="{{route("users.index")}}">on the info_user table</a> and a 1 to many with the <a href="{{route("posts.index")}}">post table</a>
    </p>
    
@endsection
    
