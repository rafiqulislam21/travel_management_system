<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light border-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active px-3">
        <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown px-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Destinations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @foreach ($tourCatagory as $item)
            <a class="dropdown-item" href="{{route('filtered_packages',$item['catagory'])}}">{{$item['catagory']}}</a>
          @endforeach
          <!-- <a class="dropdown-item" href="{{route('destinations')}}">Bangladesh Tour</a>
          <a class="dropdown-item" href="{{route('destinations')}}">Group Tour</a>
          <a class="dropdown-item" href="{{route('destinations')}}">International Tour</a>
          <a class="dropdown-item" href="{{route('destinations')}}">Corporate Tour</a> -->
        </div>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="{{route('visaServices')}}">Visa Services</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="{{route('aboutUs')}}">About us</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="{{route('contactUs')}}">Contact <button type="button" class="btn btn-sm btn-outline-primary py-0"> Now </button> </a>
      </li>
      <!-- <li class="nav-item px-3">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    {{ Auth::user()->name }}
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
      </li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @if (Auth::guest())
      <li><a class="btn btn-sm btn-outline-primary mr-1" href="{{ route('login') }}">Login</a></li>
      <li><a class="btn btn-sm btn-outline-warning" href="{{ route('register') }}">Register</a></li>
      <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
      @else
      <li class="dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw text-success"></i> {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
          <li>
            <a class="pl-4 text-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
             <i class="fas fa-power-off"></i> Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </li>
    @endif
  </ul>

  </div>
</nav>
