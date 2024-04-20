@include('layouts._head')
<style>
  .w3l-main-slider .banner-top1{
    background: url({{$data['slider'][0]['value2']}}) no-repeat;
    background-size: cover; 
  }
  .w3l-main-slider .banner-top2{
    background: url({{$data['slider'][1]['value2']}}) no-repeat;
    background-size: cover; 
  }
  .w3l-main-slider .banner-top3{
    background: url({{$data['slider'][2]['value2']}}) no-repeat;
    background-size: cover; 
  }
  .w3l-main-slider .banner-top4{
    background: url({{$data['slider'][3]['value2']}}) no-repeat;
    background-size: cover; 
  }
</style>
<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
    <div class="owl-one owl-carousel owl-theme">
      @foreach($data['slider'] as $k=>$row)
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top{{$k+1}} bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>{{$row['value']}}</h5>
                 <!-- <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="#">Read More</a> -->
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>
      @endforeach
    </div>
  </div>

</div>
<!-- /main-slider -->
</section>
<section class="w3l-feature-3" id="features">
	<div class="grid top-bottom mb-lg-5 pb-lg-5">
		<div class="container">
			<div class="middle-section grid-column text-center">
        @foreach($data['features_block'] as $k=>$row)
				<div class="three-grids-columns">
					<!-- <span class="fa fa-laptop"></span> -->
          <img src="assets/images/sub_icon-1.png">
					<h4>{{$row['key']}}</h4>
					<p>{{$row['value']}}</p>
					<a href="{{$row['value3']}}" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
				</div>
        @endforeach
			</div>
		</div>
	</div>
</section>
<!-- features-4 block -->
<section class="w3l-index1" id="about">
	<div class="calltoaction-20  py-5 editContent">
		<div class="container py-md-3">
		
			<div class="calltoaction-20-content row">
				<div class="column center-align-self col-lg-6 pr-lg-5">
					<h5 class="editContent">{{$data['recent_project'][0]['key']}}</h5>
					<p class="more-gap editContent">{{$data['recent_project'][0]['value']}}</p>
					<p class="more-gap editContent">{{$data['recent_project'][1]['value']}}</p>
					<a class="btn btn-secondary btn-theme2 mt-3" href="{{$data['recent_project'][0]['value3']}}"> Read More</a>
				</div>
				<div class="column ccont-left col-lg-6">
					<!-- <img src="assets/images/g1.jpg" class="img-responsive" alt=""> -->
          <!-- <video width="100%" height="auto" preload="none" controls> -->
          <video width="100%" height="auto" autoplay muted loop>
            <source src="{{$data['recent_project'][0]['value2']}}" type="video/mp4">
            <source src="{{$data['recent_project'][1]['value2']}}" type="video/webm">
            <source src="assets/images/v-preview.png" type="video/ogg">
          </video>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- customers4 block -->
<section class="w3l-customers-4" id="testimonials">
  <div id="customers4-block" class="py-5">
    <div class="container py-md-3">
  
     <div class="section-title align-center row">
      <div class="item-top col-md-6 pr-md-5">
        <div class="heading">
          <h3 class="head text-white">{{$data['ceo'][0]['value']}}</h3>
          <p class="my-3 head text-white">{{$data['ceo'][1]['value']}}</p>
            <p class="my-3 head text-white">{{$data['ceo'][2]['value']}}</p>
          </div>
     </div>
          <div class="item-top col-md-6 mt-md-0 mt-4">
            <div class="item text-center">
             <div class="imgTitle">
               <img src="{{$data['ceo'][3]['value2']}}" class="img-responsive" alt="" />
              </div>
              <h6 class="mt-3">{{$data['ceo'][3]['value']}}</h6>
              <p class="">{{$data['ceo'][3]['value3']}}</p>
              <!-- <p> Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p> -->
              
          </div>
         </div>
    </div>
  </div>
  </div>
</section>
<section class="w3l-index2">
        <div class="main-w3 py-5" id="stats">
            <div class="container py-lg-3">
               <div class="row main-cont-wthree-fea">
                  @foreach($data['no_of_project'] as $row)
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">{{$row['value3']}}</h3>
                            <p>{{$row['value']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <!-- //specifications -->
    </section>
<!-- grids block 5 -->
<!-- customers Section -->
<section class="w3l-customers py-md-5 py-4" id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-three owl-carousel owl-theme logo-view">
                    @foreach($data['client_list'] as $row)
                    <div class="item">
                        <img src="{{$row['value2']}}" alt="{{$row['value']}}" class="img-fluid">
                    </div>
                    @endforeach
                    @foreach($data['client_list'] as $row)
                    <div class="item">
                        <img src="{{$row['value2']}}" alt="{{$row['value']}}" class="img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //customers Section -->
@include('layouts._foot')


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
<script>
  $(document).ready(function () {
    $('.owl-three').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 3,
          nav: true
        },
        480: {
          items: 3,
          nav: true
        },
        667: {
          items: 3,
          nav: true
        },
        800: {
          items: 4,
          nav: true
        },
        1000: {
          items: 5,
          nav: true
        }
      }
    })
  })
</script>