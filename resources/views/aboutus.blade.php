@extends('layout.website-template')

@section('section')
    <!-- Top Menu 1 -->
    @include('layout.website-topmenu1')
    <!-- //Top Menu 1 -->
    @include('layout.website-menu')

    <section class="w3l-about-breadcrum">
        <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">
            <h2>About Us</h2>
            <p><a href="/">Home</a> &nbsp; / &nbsp; About</p>
        </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->
    <section class="w3l-content-with-photo-4">
        <div id="content-with-photo4-block" class="pt-5"> 
            <div class="container py-md-5">
                <div class="cwp4-two row">
                    
                    <div class="cwp4-text col-lg-6">
                        <h3>Nasco Power Engineering Ltd.</h3>
                        <p>A concern of Nasco Group is a name that doesn’t need any identity. It is one of the emerging and fastest growing business groups that provide wide range of services to its vast and diversified client base.</p>
                        <p>Nasco Power Engineering Ltd. was incorporated in 1997. Nasco Power Engineering Ltd. is specialized in carrying out consultancy, distributorship, automation, contracting, import, manufacturing and engineering services & driven by engineers who are reputed in their fields. Over the 2 decades continuing to build our service, efficiency, technology and our brand, which has now become synonymous with our commitment to helping our customers in Bangladesh Government, Public sectors, Private sectors, domestic and industrial market throughout in Bangladesh</p>
                    </div>
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                        <img src="{{ asset('webassets/images/2.jpg') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-content-with-photo-4">
        <div class="features py-4">
            <div class="container pb-5">
            
                <div class="fea-gd-vv row ">	
                    <div class="float-lt feature-gd col-lg-4 col-sm-6">	
                        
                        <div class="icon-info">
                            <h5>Our Mission</h5>
                            <ul class="cont-4">
                                <li><span class="fa fa-check"></span>Materiality & Interpretation</li>
                                <li><span class="fa fa-check"></span>Design Management and Cultural Enterprise </li>
                                <li><span class="fa fa-check"></span>Experience Design (XD)</li>
                                <li><span class="fa fa-check"></span>Sound Design; Social Media and SEO </li>
                            </ul>
                        </div>
                    </div>	
                </div> 
            </div>  
        </div>
    </section>
    <section class="w3l-feature-2">
            <div class="grid top-bottom py-5">
                <div class="container py-md-5">
                    <div class="heading text-center mx-auto">
                        <h3 class="head">Why Choose Our Institution</h3>
                        <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Nulla mollis dapibus nunc, ut rhoncus
                            turpis sodales quis. Integer sit amet mattis quam.</p>
                            
                        </div>
                    <div class="middle-section row mt-5 pt-3">
                        <div class="three-grids-columns col-lg-3 col-sm-6 text-center">
                            <div class="icon"> <span class="fa fa-graduation-cap" aria-hidden="true"></span></div>
                            <h4>Scholarship Facility</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere</p>
                        </div>
                        <div class="three-grids-columns col-lg-3 col-sm-6 mt-sm-0 mt-5 text-center">
                            <div class="icon"> <span class="fa fa-user" aria-hidden="true"></span></div>
                            <h4>Skilled Lecturers</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere</p>
                        </div>
                        <div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5 text-center">
                            <div class="icon"> <span class="fa fa-book" aria-hidden="true"></span></div>
                            <h4> Library & Store</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere</p>
                        </div>
                        <div class="three-grids-columns col-lg-3 col-sm-6 mt-lg-0 mt-5 text-center">
                            <div class="icon"> <span class="fa fa-bed" aria-hidden="true"></span></div>
                            <h4>Hostel Facilities</h4>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="teams-1">
    <section class="teams text-center py-5" id="team">
            <div class="container py-xl-5 py-lg-3">
                <div class="heading text-center mx-auto">
                    <h3 class="head">Our Skilled Instructors</h3>
                    <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Nulla mollis dapibus nunc, ut rhoncus
                        turpis sodales quis. Integer sit amet mattis quam.</p>
                        
                    </div>
                <div class="row inner-sec-w3ls-w3pvt-aminfo pt-5 mt-3">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="assets/images/t1.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <h4>Trent Boult</h4>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li class="effect-soc-team1">
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team2">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team3">
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 top-tem">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="assets/images/t2.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <h4>Ruth Grace</h4>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li class="effect-soc-team1">
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team2">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team3">
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  mt-sm-0 mt-5">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="assets/images/t3.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <h4>Jonty Rhoods</h4>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li class="effect-soc-team1">
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team2">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team3">
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 top-tem">
                        <div class="team-grid text-center">
                            <div class="team-img">
                                <img class="img-fluid rounded" src="assets/images/t4.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <h4>Maria Clisters</h4>
                                <ul class="d-flex justify-content-center py-3 social-icons">
                                    <li class="effect-soc-team1">
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team2">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="effect-soc-team3">
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @include('layout.website-footer')

    @include('layout.website-commont-script')
    
    <script src="{{ asset('webassets/js/owl.carousel.js') }}"></script>

    <!-- script for -->
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplaySpeed: 1000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                items: 1,
                nav: false
                },
                480: {
                items: 1,
                nav: false
                },
                667: {
                items: 1,
                nav: true
                },
                1000: {
                items: 1,
                nav: true
                }
            }
            })
        })
    </script>
    <!-- //script -->
@endsection