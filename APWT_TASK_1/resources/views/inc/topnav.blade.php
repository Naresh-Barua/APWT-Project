{{-- <a class="btn btn-primary" href="{{route('home')}}">Home</a>
<a class="btn btn-primary" href="{{route('service')}}">Service</a>
<a class="btn btn-primary" href="{{route('ourteam')}}">Our Team</a> --}}

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid ">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('service')}}">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('ourteam')}}">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contactus')}}">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>