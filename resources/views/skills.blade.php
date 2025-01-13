@extends('layout')

@section('container')


@foreach ($skills as $skill)

<img src="/img/{{ $skill->image }}" alt="" width="100px" height="100px" class="mt-3">
<h1>{{ $skill->name }}</h1>

    
@endforeach

    
@endsection