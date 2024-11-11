<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin._head')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin._navbar')
      <div class="container-fluid page-body-wrapper">
        @include('admin._sidebar')
        <div class="main-panel">
          @include('admin.product.'.$page_body)
          @include('admin._footer')
        </div>
      </div>
    </div>
    @include('admin._script')
    <script src="{{asset('admin/assets/js/file-upload.js')}}"></script>
  </body>
</html>