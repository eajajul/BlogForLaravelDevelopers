@extends('layout.app')
@section('content')

<a href="/posts" class="btn btn-secondary">Go back</a>
{!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-lg-right'])!!}
{{  Form::hidden('_method','DELETE')}}
{{  Form::submit('Delete',['class'=>'btn btn-outline-danger m-1'])}}
{!! Form::close() !!}
<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary float-lg-right m-1"> Edit</a>


<hr>
<h1>{{ $post->title }}</h1>
<div>
	<p>{!!$post->body !!}</p>
</div>

<hr>
<small>Created On {{ $post->created_at }}</small>

@endsection