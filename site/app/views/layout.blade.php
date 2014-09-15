<html>
	<head>
		@yield('title')
	</head>
	<body>
		@if(Session::has('message'))
			<p style="color: blue;">{{ Session::get('message') }}</p>
		@endif
		@yield('content')
	</body>
</html>