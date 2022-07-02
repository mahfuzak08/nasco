<section class="w3l-bootstrap-header">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
        <!--<a class="navbar-brand" href="#"><img src="{{ asset('webassets/images/logo.png') }}" width="40px" > NASCO</a>-->
        <!-- if logo is image enable this   -->
        <a class="navbar-brand" href="##">
            <img src="{{ asset('webassets/images/logo.png') }}" alt="Your logo" title="Your logo" style="height:35px;" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/aboutus">About Us</a>
                    <a class="dropdown-item" href="/aboutus">Mission</a>
                    <a class="dropdown-item" href="/aboutus">Vision</a>
                </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Products & Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">Clients</a>
            </li> --}}
        
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <form action="search-results.html" class="form-inline position-relative my-2 my-lg-0">
            <input class="form-control search" type="search" placeholder="Search here..." aria-label="Search" required="">
            <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form>
        </div>
    </div>
    </nav>
</section>