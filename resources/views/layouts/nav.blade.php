<div class="navheader links clear">
    	
    <div style="text-align: center;">
    	<a class="logokcv" href="{{ url('/') }}">
	   		<img src="{{asset('images/logokcv.png')}}" alt>
    	</a>
   	</div>

   	@yield('navcontent')

   	<div style="float: right;">
    	@if(Request::is('/'))
    		@auth
          <a class="navlink" href="{{ url('/dashboard') }}">Home</a>
       	@else
          {{-- <a class="navlink" href="{{ route('login') }}">Login (admin)</a> --}}
       	@endauth
      @else
       	@guest
           {{-- <a class="navlink" href="{{ route('login') }}">Login (admin)</a> --}}
	       @else
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
	        @endguest
   		@endif
   	</div>
</div>

