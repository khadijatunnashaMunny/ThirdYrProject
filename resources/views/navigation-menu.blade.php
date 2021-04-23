    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div style="padding:10px" class="topbar">
            </div>
            <div class="row">
                <!-- Logo -->
                <div class="col-md-1">
                    <h1 style="margin:10px;">ITTC</h1>
                </div>
                <!-- Navigation Links -->
                <div class="col-md-1 active">
                    <a href="/dashboard"><p style="padding-top: 22px;">DASHBOARD</p></a>
                </div>
                <div class="col-md-1">
                   <a href="/home"><p style="padding-top: 22px;">ATTENDANCE</p></a>
                </div>
                <div class="col-md-2">
                    <a href="/registereduser"><p style="padding-top: 22px;">REGISTERED USER </p></a>
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-2">
                    <div style="margin-left:70px"class="dropdown">
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
                </div>
            </div>
        </div>
    </nav>
