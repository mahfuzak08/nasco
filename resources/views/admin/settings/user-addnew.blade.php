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
            <div class="content-wrapper">
                <div class="page-header">
                  <h3 class="page-title"> {{ __('admin.user_management') }} </h3>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('user-manage')}}" class="btn btn-sm btn-rounded btn-secondary">{{__('admin.back')}}</a></li>
                    </ol>
                  </nav>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">{{ __('Nname') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="{{ __('Name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="examplepassword">{{ __('Password') }}</label>
                                        <input type="password" class="form-control" id="examplepassword" name="password" placeholder="{{ __('Password') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">{{ __('Mobile') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName2" name="mobile" placeholder="{{ __('Mobile') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName6">{{ __('Email') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName6" name="email" placeholder="{{ __('Email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Role') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName7" name="access_lavel" placeholder="{{ __('Access lavel') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName8">{{ __('Address') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName8" name="address" placeholder="{{ __('Address') }}">
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-primary btn-sm me-2">{{ __('Save Now') }}</button><br><br>
                                    <a onclick="history.back()" class="btn btn-sm btn-rounded btn-secondary">{{ __('Cancel') }}</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          @include('admin._footer')
        </div>
      </div>
    </div>
    @include('admin._script')
  </body>
</html>