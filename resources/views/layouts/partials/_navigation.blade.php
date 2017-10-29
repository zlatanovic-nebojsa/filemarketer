<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
		<div class="navbar-brand">
			<a class="navbar-item" href="/">
				{{ config('app.name') }}
			</a>

			<button class="button navbar-burger">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
		<div class="navbar-menu navbar-end">
			@if(auth()->check())
				<a href="#" class="navbar-item" onclick="event.preventDefault(); document.getElementById('logout').submit();">
					Sign Out
				</a>
				<a href="{{ route('account') }}" class="navbar-item">
					Your account
				</a>

				@role('admin')
				<a href="{{ route('admin.index' )}}" class="navbar-item">
					Admin
				</a>
				@endrole
			@else
				<a href="{{ route('login') }}" class="navbar-item">
					Sign In
				</a>

				<div class="navbar-item">	
					<a href="{{ route('register') }}" class="button">
						Start selling
					</a>
				</div>
			@endif
		</div>
	</div>
</nav>

 <form id="logout" action="{{ route('logout') }}" method="POST" class="is-hidden">
 	{{ csrf_field() }}
 </form>