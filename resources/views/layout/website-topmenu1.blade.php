<section class="w3l-top-menu-1">
    <div class="top-hd">
        <div class="container">
    <header class="row top-menu-top">
        <div class="accounts col-md-9 col-6">
            <li class="top_li"><span class="fa fa-phone"></span><a href="tel:+142 5897555">+142 5897555</a> </li>
            <li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="mailto:education-mail@support.com" class="mail"> info@example.com</a>	</li>
        </div>
        <div class="social-top col-md-3 col-6">
            @if (Route::has('login'))
                @auth
                    <a href="home" class="btn btn-secondary btn-theme4">Dashboard</a>
                @else
                    <a href="login" class="btn btn-secondary btn-theme4">SIGN IN</a>
                @endauth
            @endif
        </div>
    </header>
    </div>
</section>
