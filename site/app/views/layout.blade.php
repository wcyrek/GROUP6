<html>
	<head>
		<link rel="icon" type="image/png" href="img/ncert.png" />
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::style('css/style.css')}}
		{{HTML::script('http://code.jquery.com/jquery-latest.min.js') }}
		{{HTML::script('js/bootstrap.min.js') }}
		{{HTML::script('js/main.js') }}
		@yield('title')
	</head>
	<body>
		<div class="page">
			<div class="header">	
				<div class="header_left"></div>
				<div class="header_right"></div>
				<div class="header_mid">Student Certification Center</div>
			</div>
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
		</div>
	</body>
</html>