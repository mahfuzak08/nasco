<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold name-row mb-2">{{ Auth::user()->name }}</span>
          <span class="text-secondary text-small">
            @switch (Auth::user()->access_lavel)
              @case ('777')
                Supper Admin
                @break
              @case ('666')
                Admin
                @break;
              @case ('555')
                Manager
                @break;
              @case ('444')
                Editor
                @break;
              @case ('333')
                Viewer
                @break;
            @endswitch
          </span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <span class="menu-title">{{ __('Dashboard') }}</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <form class="nav-link" method="POST" action="{{ route('logout') }}" x-data>
        @csrf
        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();" class="menu-title">
            {{ __('Logout') }}
        </x-responsive-nav-link>
        <i class="mdi mdi-logout menu-icon"></i>
      </form>
    </li>
  </ul>
</nav>