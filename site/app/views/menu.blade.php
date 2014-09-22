<ul id="menu">
	<li class="first"/><li>{{ HTML::linkRoute('home', 'Home') }}</li><!-- 
@if (!Auth::check())
	
@elseif(Auth::user()->admin)
	--><li>{{ HTML::linkRoute('skills', 'Skills') }}</li><li>{{ HTML::linkRoute('skilltypes', 'Skilltypes') }}</li><li>{{ HTML::linkRoute('users', 'Users') }}</li><!--  -->
@else
	
@endif
	--><li>{{ HTML::linkRoute('about', 'About') }}</li><li class="last"/>
</ul>