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
                  <h3 class="page-title"> {{ __('User Management') }} </h3>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{route('user-manage')}}" class="btn btn-sm btn-rounded btn-secondary">{{__('Back')}}</a></li>
                    </ol>
                  </nav>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" method="POST" action="{{ route('update-user', $user->id) }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <input type="hidden" name="redirect_url" value="edit-user/{{$user->id}}">
                                    <div class="form-group">
                                        <label for="exampleInputName1">{{ __('Name') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$user->name}}" placeholder="{{ __('Name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName2">{{ __('Mobile') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName2" name="mobile" value="{{$user->mobile}}" placeholder="{{ __('Mobile') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName6">{{ __('Email') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName6" name="email" value="{{$user->email}}" placeholder="{{ __('Email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName7">{{ __('Role') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName7" name="access_lavel" value="{{$user->access_lavel}}" placeholder="{{ __('Access lavel') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName8">{{ __('Address') }}</label>
                                        <input type="text" class="form-control" id="exampleInputName8" name="address" value="{{$user->address}}" placeholder="{{ __('Address') }}">
                                    </div>
                              
                                    <button type="submit" class="btn btn-rounded btn-primary btn-sm me-2">{{ __('Update') }}</button><br><br>
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