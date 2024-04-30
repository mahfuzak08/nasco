<section class="w3l-footer-29-main">
  <div class="footer-29">
      <div class="container">
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contact Us</h6>
                  <ul>
                      <li><p><span class="fa fa-map-marker"></span> {{$data['address'][0]['value']}}</p></li>
                      <li><a href="tel:{{$data['topnav'][0]}}"><span class="fa fa-phone"></span> {{$data['topnav'][0]}}</a></li>
                      <li><a href="mailto:{{$data['topnav'][1]}}" class="mail"><span class="fa fa-envelope-open-o"></span> {{$data['topnav'][1]}}</a></li>
                  </ul>
                  <div class="main-social-footer-29">
                    @foreach($data['social_media_link'] as $row)
                      <a href="{{$row['value3']}}" class="{{$row['value']}}"><span class="fa fa-{{$row['value']}}"></span></a>
                    @endforeach
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Featured Links</h6>
                      @foreach($data['featured_link'] as $row)
                      <li><a href="{{$row['value3']}}">{{$row['value']}}</a></li>
                      @endforeach
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                  <h6 class="footer-title-29">Newsletter </h6>
                  <form action="#" class="subscribe" method="post">
                    <input type="email" name="email" placeholder="Email" required="">
                    <button><span class="fa fa-envelope-o"></span></button>
                  </form>
                  <p>{{$data['newsletter'][0]['value']}}</p>
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      @foreach($data['quick_link'] as $row)
                      <li><a href="{{$row['value3']=='/' ? '/' : route($row['value3'])}}">{{$row['value']}}</a></li>
                      @endforeach
                  </ul>
              </div>
          </div>
          <div class="d-grid grid-col-2 bottom-copies">
              <p class="copy-footer-29">© 2024 All rights reserved by {{config('app.name')}} | Designed by <a href="https://absoft-bd.com">ABSoft</a></p>
               <ul class="list-btm-29">
                      <li><a href="#link">Privacy policy</a></li>
                      <li><a href="#link">Terms of service</a></li>
                      
                  </ul>
          </div>
      </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<script src="assets/js/owl.carousel.js"></script>
</body>

</html>