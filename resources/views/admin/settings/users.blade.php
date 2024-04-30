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
                  <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                      <i class="mdi mdi-home"></i>
                    </span> {{ __('User Management')}}
                  </h3>
                  {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('add-new-user')}}" class="btn btn-rounded btn-sm btn-success">{{__('Add New')}}</a></li>
                    </ol>
                  </nav> --}}
                </div>
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                              <form action="{{route('update-user-manage')}}" method="GET">
                                @csrf
                                @php 
                                $sv = isset($_GET['search']) ? $_GET['search'] : '';
                                @endphp
                                <div class="row">
                                  <input type="text" name="search" class="col-12 col-md-10" value="{{$sv}}" placeholder="{{__('What You Want to Find')}}">
                                  <button type="submit" class="col-12 col-md-2 btn btn-info">{{__('Find')}}</button>
                                </div>
                              </form>
                              <div class="row table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> {{__('SL')}} </th>
                                            <th> {{__('Name')}} </th>
                                            <th> {{__('Mobile')}} </th>
                                            <th> {{__('Email')}} </th>
                                            <th> {{__('Action')}} </th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                      @if(count($datas) > 0)
                                        @php 
                                        if(isset($_GET['page']) && $_GET['page']>0)
                                          $n = 1 + (($_GET['page'] - 1) * 10);
                                        else
                                          $n = 1;
                                        @endphp
                                        @foreach($datas as $row)
                                          <tr>
                                            <td>{{$n++}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->mobile}}</td>
                                            <td>{{$row->email}}</td>
                                            <td>
                                              <a href="{{route('user-details', $row->id)}}" class="btn btn-info btn-rounded btn-sm">{{__('Details')}}</a> 
                                              <a href="{{route('edit-user', $row->id)}}" class="btn btn-warning btn-rounded btn-sm">{{__('Edit')}}</a> 
                                              <a href="{{route('delete-user', $row->id)}}" class="btn btn-danger btn-rounded btn-sm" onclick="return confirm('Are you sure, you want to delete?')">{{__('Delete')}}</a> 
                                            </td>
                                          </tr>
                                        @endforeach
                                      @else
                                          <tr>
                                            <td colspan="5" class="text-center">{{__('No data found')}}</td>
                                          </tr>
                                      @endif
                                    </tbody>
                                </table>
                              </div>
                              {{ $datas->onEachSide(3)->links() }}
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