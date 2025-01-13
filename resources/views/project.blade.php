@extends('layout')

@section('container')

<h1>{{ $project -> name }}</h1>
<img src="/img/{{ $project->image }}" alt="" width="500px" height="320px">
<p>{{ $project->description }}</p>
<a href="/projects">back</a>
    
@endsection