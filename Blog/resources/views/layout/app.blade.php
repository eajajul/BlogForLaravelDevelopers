<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="	sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>



       <title>{{config('app.name')}}</title>

     </head>


    <body>
    	@include('inc.navbar')

    	
    	<div class='container'>
         @include('inc.messages')
     		 @yield('content')
           <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
               <script>
                  CKEDITOR.replace( 'article-ckeditor' );
               </script>
      </div>
    </body>
</html>
