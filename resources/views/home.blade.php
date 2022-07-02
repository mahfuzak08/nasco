@extends('layout.website-template')

@section('section')
    <!-- Top Menu 1 -->
    @include('layout.website-topmenu1')
    <!-- //Top Menu 1 -->
    @include('layout.website-menu')
    <section class="w3l-main-slider" id="home">
        <!-- main-slider -->
        <div class="companies20-content">
        
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                    <div class="banner-info">
                        <div class="container">
                        <div class="banner-info-bg mx-auto text-center">
                            <h5>Providing Power Engineering Services</h5>
                        <!-- <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a> -->
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </li>
                </div>
                <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                    <div class="banner-info">
                        <div class="container">
                        <div class="banner-info-bg mx-auto text-center">
                            <h5>Automated Water Solutions</h5>
                            <!-- <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                </div>
                <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
                    <div class="banner-info">
                        <div class="container">
                        <div class="banner-info-bg mx-auto text-center">
                            <h5>Power Pylons and Substation</h5>
                        <!-- <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                </div>
                <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
                    <div class="banner-info">
                        <div class="container">
                        <div class="banner-info-bg mx-auto text-center">
                            <h5>Scada Control Centre</h5>
                        <!-- <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a> -->
                        </div>
                        </div>
                    </div>
                    </div>
                </li>
                </div>
            </div>
        </div>
        <!-- /main-slider -->
    </section>
    <section class="w3l-feature-3" id="features">
        <div class="grid top-bottom mb-lg-5 pb-lg-5">
            <div class="container">
                
                <div class="middle-section grid-column text-center">
                    <div class="three-grids-columns">
                        <!-- <span class="fa fa-laptop"></span> -->
                        <img src="{{ asset('webassets/images/sub_icon-1.png') }}">
                        <h4>Substations</h4>
                        <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                        <a href="#" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
                    </div>
                    <div class="three-grids-columns">
                        <!-- <span class="fa fa-users"></span> -->
                        <img src="{{ asset('webassets/images/trans_icon.png') }}">
                        <h4>Transmission & Distribution</h4>
                        <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                        <a href="#" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
                    </div>
                    <div class="three-grids-columns">
                        <!-- <span class="fa fa-book"></span> -->
                        <img src="{{ asset('webassets/images/prot_icon.png') }}">
                        <h4>Protection & Coordination </h4>
                        <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                        <a href="#" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about block -->
    <section class="w3l-index1" id="about">
        <div class="calltoaction-20  py-5 editContent">
            <div class="container py-md-3">
            
                <div class="calltoaction-20-content row">
                    <div class="column center-align-self col-lg-6 pr-lg-5">
                        <h5 class="editContent">Nasco Power Engineering Ltd.</h5>
                        <p class="more-gap editContent">A concern of Nasco Group is a name that doesn’t need any identity. It is one of the emerging and fastest growing business groups that provide wide range of services to its vast and diversified client base.</p>
                        <p class="more-gap editContent">Nasco Power Engineering Ltd. was incorporated in 1997. Nasco Power Engineering Ltd. is specialized in carrying out consultancy, distributorship, automation, contracting, import, manufacturing and engineering services & driven by engineers who are reputed in their fields. Over the 2 decades continuing to build our service, efficiency, technology and our brand, which has now become synonymous with our commitment to helping our customers in Bangladesh Government, Public sectors, Private sectors, domestic and industrial market throughout in Bangladesh</p>
                        <a class="btn btn-secondary btn-theme2 mt-3" href="#"> Read More</a>
                    </div>
                    <div class="column ccont-left col-lg-6">
                        <!-- <img src="{{ asset('webassets/images/g1.jpg') }}" class="img-responsive" alt=""> -->
                <!-- <video width="100%" height="auto" preload="none" controls> -->
                <video width="100%" height="auto" autoplay muted loop>
                <source src="{{ asset('webassets/videos/v1.mp4') }}" type="video/mp4">
                <source src="{{ asset('webassets/videos/v1.webm') }}" type="video/webm">
                <source src="{{ asset('webassets/images/v-preview.png') }}" type="video/ogg">
                </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about block -->
    <section class="services-12" id="course">
        <div class="form-12-content">
            <div class="container">
                <div class="grid grid-column-2 ">
                    
                    <div class="column1">
                        <div class="heading">
                            <h3 class="head text-white">Apply for Scholarship</h3>
                            <h4>Fall 2019 applications are now open</h4>
                            <p class="my-3 text-white"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                Nulla mollis dapibus nunc, ut rhoncus
                                turpis sodales quis. Integer sit amet mattis quam.</p>
                            </div>
                        </div>
                        <div class="column2">
                            <a class="btn btn-secondary btn-theme2 mt-3" href="#"> Apply Here</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--  form-12 -->
    <section class="w3l-form-12">
        <div class="form-12-content py-5" id="services">
            <div class="container py-md-3">
                <div class="grid grid-column-2 py-md-5">
                        
                    <div class="column1">
                        <h4 class="tagline">Find your course</h4>
                        <p>Fill in below form to find your courses</p>
                            <form action="/" method="Get">
                                <div class="">
                                    <input type="text" name="name" class="form-input" placeholder="Course Name">
                                </div>
                                <div class="">
                                    <select id="sel1">
                                        <option>Category</option>
                                        <option>Computer</option>
                                        <option>Science</option>
                                        <option>History</option>
                                        <option>Economics</option>
                                        </select>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-secondary btn-theme2">Submit</button>
                            </form>
                        </div>
                        <div class="column2">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-6">
                                <a href="#"><div class="courses-item">
                                    <span class="fa fa-male"></span>
                                    <p>Socioligy</p>
                                </div></a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6">
                                <a href="#"><div class="courses-item">
                                    <span class="fa fa-suitcase"></span>
                                    <p>Business</p>
                                </div></a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                                <a href="#"><div class="courses-item">
                                    <span class="fa fa-code"></span>
                                    <p>Web Dev</p>
                                </div></a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                                <a href="#"><div class="courses-item">
                                    <span class="fa fa-flask"></span>
                                    <p>Science</p>
                                </div></a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-4">
                                <a href="#"><div class="courses-item mt-2">
                                    <span class="fa fa-money"></span>
                                    <p>Ecomomics</p>
                                </div></a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-4">
                                <a href="#"><div class="courses-item mt-2">
                                    <span class="fa fa-gg"></span>
                                    <p>Biology</p>
                                </div></a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-4">
                                <a href="#"><div class="courses-item mt-2">
                                    <span class="fa fa-desktop"></span>
                                    <p>Computing</p>
                                </div></a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-6 mt-4">
                                <a href="#"><div class="courses-item mt-2">
                                    <span class="fa fa-mouse-pointer"></span>
                                    <p>Web Design</p>
                                </div></a>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- specifications -->
    <section class="w3l-index2">
        <div class="main-w3 py-5" id="stats">
            <div class="container py-lg-3">
                <div class="row main-cont-wthree-fea">
                    <div class="col-lg-3 col-sm-6">
                        <div class="grids-speci1">
                            <h3 class="title-spe">60</h3>
                            <p>SUBSTATIONS</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">18</h3>
                            <p> TRANSMISSION & <br> DISTRIBUTION</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  mt-lg-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">34</h3>
                            <p>PROTECTION & <br> COORDINATION</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">20</h3>
                            <p>SYSTEM PLANNING</p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
        <!-- //specifications -->
    </section>
    <!-- customers4 block -->
    <section class="w3l-customers-4" id="testimonials">
        <div id="customers4-block" class="py-5">
        <div class="container py-md-3">
        
        <div class="section-title align-center row">
            <div class="item-top col-md-6 pr-md-5">
            <div class="heading">
                <h3 class="head text-white">Hear what our CEO have to say</h3>
                <p class="my-3 head text-white">Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor sit amet, consectetur adipisicingelit, Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Nulla mollis dapibus nunc, ut rhoncus
                turpis sodales quis. Integer sit amet mattis quam.</p>
                <p class="my-3 head text-white"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                    Nulla mollis dapibus nunc, ut rhoncus
                    turpis sodales quis. Integer sit amet mattis quam.</p>
                </div>
        </div>
                <div class="item-top col-md-6 mt-md-0 mt-4">
                <div class="item text-center">
                <div class="imgTitle">
                    <img src="{{ asset('webassets/images/t1.jpg') }}" class="img-responsive" alt="" />
                    </div>
                    <h6 class="mt-3">Farhad R. Black</h6>
                    <p class="">CEO</p>
                    <!-- <p> Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> -->
                    
                </div>
            </div>
        </div>
        </div>
        </div>
        
    
    </section>
    <section class="w3l-price-2" id="news">
        <div class="price-main py-5">
            <div class="container py-md-3">
                <div class="pricing-style-w3ls row py-md-5">
                    <div class="pricing-chart col-lg-6">
                    <h3 class="">Latest Posts</h3>
                    <div class="tatest-top mt-md-5 mt-4">
                            <div class="price-box btn-layout bt6">
                                <div class="grid grid-column-2">
                                        <div class="column-6">
                                                <img src="{{ asset('webassets/images/g9.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                    <div class="column1">
                                        
                                        <div class="job-info">
                                            <h6 class="pricehead"><a href="#">Summer Course Starts </a></h6>
                                            <h5>April 25, 2020</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit architecto..</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="price-box btn-layout bt6 top-middle-1">
                                <div class="grid grid-column-2">
                                        <div class="column-6">
                                                <img src="{{ asset('webassets/images/bg7.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                    <div class="column1">
                                        <div class="job-info">
                                            <h6 class="pricehead"><a href="#">	
                                                About Artificial Intelligence</a></h6>
                                            <h5>March 25, 2020</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit architecto..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-box btn-layout bt6">
                                <div class="grid grid-column-2">
                                        <div class="column-6">
                                                <img src="{{ asset('webassets/images/g8.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                    <div class="column1">
                                        
                                        <div class="job-info">
                                            <h6 class="pricehead"><a href="#">	
                                                New Exam Schedules </a></h6>
                                            <h5>February 25, 2020</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit architecto..</p>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-4">
                            <a class="btn btn-secondary btn-theme2" href="#"> View All</a>
                            </div>
                        </div>
                        <div class="w3l-faq-page col-lg-6 pl-3 pl-lg-5 mt-lg-0 mt-5">
                            <h3 class="">Upcoming Events</h3>
                            <div class="events-top mt-md-5 mt-4">
                                <div class="events-top-left">
                                        <div class="icon-top">
                                            <h3>20</h3>
                                            <p>Nov</p>
                                            <span>2020</span>
                                        </div>
                                </div>
                                <div class="events-top-right">
                                    <h6 class="pricehead"><a href="#">	
                                        Luctus et ultrices posuere</a></h6>
                                        <p class="mb-2 mt-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
                                        <li>07:00 - 10:00 </li>
                                        <li class="melb">Melbourne, Australia</li>
                                </div>
                            </div>
                            <div class="events-top mt-4">
                                <div class="events-top-left">
                                        <div class="icon-top">
                                            <h3>25</h3>
                                            <p>Nov</p>
                                            <span>2020</span>
                                        </div>
                                </div>
                                <div class="events-top-right">
                                    <h6 class="pricehead"><a href="#">	
                                        Nulla mollis dapibus nunc, ut </a></h6>
                                        <p class="mb-2 mt-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
                                        <li>07:00 - 10:00 </li>
                                        <li class="melb">Melbourne, Australia</li>
                                </div>
                            </div>
                            <div class="text-right mt-4">
                                <a class="btn btn-secondary btn-theme2" href="#"> View All</a>
                            </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- grids block 5 -->
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