<html>
	<head>
		<link rel="icon" type="image/png" href="img/ncert.png" />
		{{HTML::style('css/style.css')}}
		@yield('title')
	</head>
	<body>
		@if(Session::has('message'))
			@if(Session::has('color'))
			<p style="color: {{ Session::get('color') }}"> 
			@else
			<p>
			@endif
			{{ Session::get('message') }}</p>
		@endif
		
		@yield('content')
	</body>
</html>