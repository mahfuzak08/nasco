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
      <a class="nav-link" href="/" target="_blank">
        <span class="menu-title">{{ __('Home') }}</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <span class="menu-title">{{ __('Dashboard') }}</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('category') }}">
        <span class="menu-title">{{ __('Product Category') }}</span>
        <i class="mdi mdi-sitemap menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('product') }}">
        <span class="menu-title">{{ __('All Product') }}</span>
        <i class="mdi mdi-sitemap menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="report">
        <span class="menu-title">{{__('Pages')}}</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-bank menu-icon"></i>
      </a>
      <div class="collapse" id="pages">
        <ul class="nav flex-column sub-menu">
          @foreach($pages as $row)
          <li class="nav-item"> <a class="nav-link" href="{{ URL::route('page', ['pid' => $row->id]) }}">{{__($row->page_name)}}</a></li>
          @endforeach
        </ul>
      </div>
    </li>
    @if(Auth::user()->access_lavel > 666)
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user-manage') }}">
        <span class="menu-title">{{ __('User Management') }}</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    @endif
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