@extends('layout.app')
   @section('content')
       <h1>{{ $title}}</h1>
       @if (count($services) > 0)
	       	<ul class="list-group">
			       	@foreach ($services as $element)
			           <li class="list-group-item">{{$element}}</li>
			       	@endforeach
			</ul>       	
       @endif

    @endsection
