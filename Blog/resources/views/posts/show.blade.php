@extends('layout.app')
@section('content')

<a href="/posts" class="btn btn-secondary">Go back</a>
<h1>{{ $post->title }}</h1>
<div>
	<p>{{ $post->body }}</p>
</div>

<hr>
<small>Created On {{ $post->created_at }}</small>

@endsection