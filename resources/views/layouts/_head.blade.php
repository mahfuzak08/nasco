<!--
Author: ABSOFT
Author URL: WWW.ABSOFT-BD.COM
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{config('app.name')}} | Home </title>
    <link href="assets/css/fonts.css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>


<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row top-menu-top">
		<div class="accounts col-md-9 col-6">
				<li class="top_li"><span class="fa fa-phone"></span><a href="tel:+142 5897555">+142 5897555</a> </li>
				<li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="mailto:education-mail@support.com" class="mail"> info@example.com</a>	</li>
		</div>
		<div class="social-top col-md-3 col-6">
			<a href="#" class="btn btn-secondary btn-theme4">CAREERS</a>
		</div>
	</header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <!--<a class="navbar-brand" href="#"><img src="assets/images/logo.png" width="40px" > NASCO</a>-->
      <!-- if logo is image enable this   -->
      <a class="navbar-brand" href="##">
          <img src="assets/images/logo.png" alt="Your logo" title="Your logo" style="height:35px;" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="{{route('about')}}">About</a>
				<a class="dropdown-item" href="{{route('about')}}#mission">Mission</a>
				<a class="dropdown-item" href="{{route('about')}}#vision">Vision</a>
			</div>
		  </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('products')}}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
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