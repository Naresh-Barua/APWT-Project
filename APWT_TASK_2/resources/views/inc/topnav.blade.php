{{-- <a class="btn btn-primary" href="{{route('home')}}">Home</a>
<a class="btn btn-primary" href="{{route('service')}}">Service</a>
<a class="btn btn-primary" href="{{route('ourteam')}}">Our Team</a> --}}

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid ">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home')}}">Home</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link active" href="{{route('')}}">Log In</a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link active" href="{{route('login')}}">Log In</a>
    </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{route('signup')}}">Sign Up</a>
    </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('contactus')}}">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>