<html>
	<head>
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