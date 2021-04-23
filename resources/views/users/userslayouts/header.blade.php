<nav class="navbar navbar-expand-lg navbar-light bg-white ">
  <h2 style="padding-right: 10px"><i class="feather"></i>ITTC</h2>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="dashboard">DASHBOARD <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="home">HOME <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="myattendance">My ATTENDANCE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="myleave">My LEAVES</a>
    </li>
  </ul>
  <ul style="margin-right:70px" class="navbar-nav ml-auto  float-right">
    <li class="pcoded-header bg-white">
      <div class="dropdown">
        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" data-toggle="dropdown" style=" border-radius:50%;width:70px;height:70px;" alt="{{ Auth::user()->name }}" />
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
          <a style="text-decoration:none;" class="dropdown-item" >    
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-jet-dropdown-link href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Logout') }}
                </x-jet-dropdown-link>
            </form>
          </a>
        </div>
    </div>
               
    </li>
  </ul>
</div>
</nav>

