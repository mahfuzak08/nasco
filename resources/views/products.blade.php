@include('layouts._head')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function enableSubmitBtn(){
        document.getElementById("submitbtn").disabled = false;
    }
</script>
<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2 style="color: #fdc800;">Product Details</h2>
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; Products</p>
    </div>
  </div>
</section>
<style>
   .product_name{
      border-bottom: 3px solid #fdc800;
      font-size: 25px;
      font-weight: 700;
      margin-top: 50px;
   }
   input{
      margin-bottom: 10px;
   }
</style>
<section class="w3l-content-with-photo-4">
  <div id="content-with-photo4-block" class="pt-5">
     <div class="container py-md-5">
         @foreach($data['product'] as $key=>$row)
        <div class="cwp4-two row">
           <div class="cwp4-text col-lg-12">
              <span class="product_name">{{$row->name}}</span>
              <p>{{$row->details}}</p>
              <br><br>
           </div>
           <div class="cwp4-text col-lg-6">
               @if($key%2==0)
                  <img src="{{$row->image}}" class="img-fluid" alt="" />
               @else
                  <h5 id="vision">Technical Specifications and Features</h5>
                  <ul class="cont-4">
                     @foreach(explode('**@**', $row->specifications) as $k=>$r)
                     <li><span class="fa fa-check"></span>{{$r}}</li>
                     @endforeach
                     @foreach(explode('**@**', $row->features) as $k=>$r)
                     <li><span class="fa fa-check"></span>{{$r}}</li>
                     @endforeach
                  </ul>
                  <a class="btn btn-secondary btn-theme2 mt-3" data-toggle="modal" data-target="#myModal" href="#">Send Inquiry</a>
               @endif
            </div>
            <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
               @if($key%2==0)
                  <h5 id="vision">Technical Specifications and Features</h5>
                  <ul class="cont-4">
                     @foreach(explode('**@**', $row->specifications) as $k=>$r)
                     <li><span class="fa fa-check"></span>{{$r}}</li>
                     @endforeach
                     @foreach(explode('**@**', $row->features) as $k=>$r)
                     <li><span class="fa fa-check"></span>{{$r}}</li>
                     @endforeach
                  </ul>
                  <a class="btn btn-secondary btn-theme2 mt-3" data-toggle="modal" data-target="#myModal" href="#">Send Inquiry</a>
               @else
                  <img src="{{$row->image}}" class="img-fluid" alt="" />
               @endif
            </div>
        </div>
        @endforeach
     </div>
  </div>
</section>
<div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Fill out the form and we will get back to you shortly.</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body w3l-contacts-12">
            <form class="main-input" action="{{ route('send-inquiry') }}" method="POST">
               @csrf
               <div class="row">
                  <div class="col-12 col-lg-6">
                     <input type="text" name="name" id="name" placeholder="Name *" class="bg-transparent border-color-medium-dark-gray medium-input">
                  </div>
                  <div class="col-12 col-lg-6">
                     <input type="text" name="phone" id="phone" placeholder="Phone number with country code" class="bg-transparent border-color-medium-dark-gray medium-input">
                  </div>
                  <div class="col-12 col-lg-6">
                     <input type="text" name="email" id="email" placeholder="E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input">
                  </div>
                  <div class="col-12 col-lg-6">
                     <input type="text" name="company" id="email" placeholder="Company/Organization*" class="bg-transparent border-color-medium-dark-gray medium-input">
                  </div>
                  <div class="col-12 col-lg-12">
                     <input type="text" name="product" id="name" value="POWER TRANSFORMER" class="bg-transparent border-color-medium-dark-gray medium-input ">
                  </div>
                  <div class="col-12">
                     <textarea name="message" id="comment" placeholder="Write your query" rows="7" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                  </div>
                  <div class="col-12">
                     <span class="text-extra-small">* We don't share your personal info with anyone.</span>
                  </div>
                  <div class="col-12">
                     <div class="g-recaptcha" data-sitekey="{{$data['site_key']}}" data-callback="enableSubmitBtn"></div>
                 </div>                 
               </div>
               <div class="modal-footer">
                  <button id="submitbtn" disabled="disabled" type="button" class="btn btn-secondary btn-theme2 mt-3" data-target="#myModal12">Send Now</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@include('layouts._foot')