<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark fixed-top" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('index')}}">JobPortal</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <!-- <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li> -->
	          <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Recent Jobs</a></li>
	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
	         @hasrole('admin')
	          <!-- <li class="nav-item"><a href="{{route('jobs.index')}}" class="nav-link">Post a Job</a></li> -->
	        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Create</a>
              <div class="dropdown-menu">
                 <a class="dropdown-item" href="{{route('company_user.create')}}">Company</a>
                 <div class="dropdown-divider"></div>
                <!--  <a class="dropdown-item" href="{{route('candidates.create')}}">Candidate</a> -->
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('category.create')}}">Category</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('locations.create')}}">Location</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('jobs.create')}}">Job</a>

              </div>
            </li>

	        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Edit</a>
              <div class="dropdown-menu">
                 <a class="dropdown-item" href="{{route('company.index')}}">Company</a>
                 <div class="dropdown-divider"></div>
                <!--  <a class="dropdown-item" href="{{route('candidates.index')}}">Candidate</a> -->
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('category.index')}}">Category</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('locations.index')}}">Location</a>
                 <div class="dropdown-divider"></div>
                 <a class="dropdown-item" href="{{route('jobs.index')}}">Job</a>

              </div>
            </li>
            @endhasrole

            @hasrole('employer')
	          
	          <li class="nav-item"><a href="{{route('company_user.create')}}" class="nav-link">Register</a></li> 
	          	 
	        @endhasrole

	        @hasrole('company_user')
                

                 <li class="nav-item"><a href="{{route('jobs.create')}}" class="nav-link">Post a Job</a></li>	 
	        @endhasrole
	         

	      <!-- @hasrole('admin') -->                                     
          
            
            
              <!--  --> 
          
          <!-- @endhasrole -->
	          
	          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
	          @else
	              <li class="nav-item dropdown">
	                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                      {{ Auth::user()->name }} <span class="caret"></span>
	                  </a>

	                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	                      <a class="dropdown-item" href="{{ route('logout') }}"
	                         onclick="event.preventDefault();
	                                       document.getElementById('logout-form').submit();">
	                          {{ __('Logout') }}
	                      </a>

	                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                          @csrf
	                      </form>
	                  </div>
	              </li>
	          @endguest
	          <!-- <li class="nav-item cta cta-colored"><a href="{{route('login')}}" class="nav-link">Log In / Register</a></li> -->

	        </ul>
	      </div>
	    </div>
	  </nav>