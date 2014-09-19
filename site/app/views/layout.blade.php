<html>
	<head>
		<link rel="icon" type="image/png" href="img/ncert.png" />
		{{HTML::style('css/style.css')}}
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::script('http://code.jquery.com/jquery-latest.min.js') }}
		{{HTML::script('js/bootstrap.min.js') }}
		{{HTML::script('js/main.js') }}
		@yield('title')
	</head>
	<body>
		<div class="header" >NJ-Cert Sign In </div>
		<div class="container"> 
		@if(Session::has('message'))
			@if(Session::has('color'))
			<p style="color: {{ Session::get('color') }}"> 
			@else
			<p>
			@endif
			{{ Session::get('message') }}</p>
		@endif
		
		@yield('content')
		
		</div>
	</body>
</html>