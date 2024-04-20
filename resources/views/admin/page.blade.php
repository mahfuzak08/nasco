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
                </span> {{ $page->page_name }}
              </h3>
              {{-- <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <a href="#" class="btn btn-success">{{__('Add New')}}</a>
                  </li>
                </ul>
              </nav> --}}
            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="accordion" id="accordionExample">
                  @foreach($sectiongroup as $sec)
                  @if($sec->section_name !== 'main')
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{str_replace(' ', '', $sec->section_name)}}" aria-expanded="true" aria-controls="{{str_replace(' ', '', $sec->section_name)}}">
                        {{$sec->section_name}}
                      </button>
                    </h2>
                    <div id="{{str_replace(' ', '', $sec->section_name)}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th> {{__('Key')}} </th>
                              <th> {{__('Value')}} </th>
                              <th> {{__('Action')}} </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($section as $row)
                              @if($sec->section_name == $row->section_name)
                              <tr>
                                <td> {{ $row->key }} </td>
                                <td> 
                                  {{ substr($row->value, 0, 20 )}} 
                                  @if($row->value2)
                                  <br>
                                  {{ substr($row->value2, 0, 20) }} 
                                  @endif
                                  @if($row->value3)
                                  <br>
                                  {{ substr($row->value3, 0, 20) }} 
                                  @endif
                                </td>
                                <td>
                                  <button onclick="window.location='{{ url("page?pid=".$page->id."&sid=".$row->id."&t=e") }}'" class="btn btn-inverse-warning btn-icon"><i class="mdi mdi-lead-pencil"></i></button>
                                  <button onclick="window.location='{{ url("page?pid=".$page->id."&sid=".$row->id."&t=d") }}'" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button>
                                </td>
                              </tr>
                              @endif
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="">
                  <form class="forms-sample" method="POST" action="{{ route('save-section') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="pid" value="{{$page->id}}" />
                    <input type="hidden" name="id" value="{{!empty($edititem->id) ? $edititem->id : ''}}" />
                    <input type="hidden" name="page_name" value="{{!empty($edititem->id) ? $edititem->page_name : $page->page_name}}" />
                    <div class="form-group form-group-margin-bottom-off row">
                      <label for="input1" class="col-sm-3 col-form-label">{{__('Page Name')}}</label>
                      <div class="col-sm-9">
                        <input type="text" disabled class="form-control" id="input1" value="{{!empty($edititem->id) ? $edititem->page_name : $page->page_name}}">
                      </div>
                    </div>
                    <div class="form-group form-group-margin-bottom-off row">
                      <label for="input7" class="col-sm-3 col-form-label">{{__('Section Name')}}</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="section_name" required id="input7" value="{{!empty($edititem->id) ? $edititem->section_name : ''}}" placeholder="{{__('Section Name')}}">
                      </div>
                    </div>
                    <div class="form-group form-group-margin-bottom-off row">
                      <label for="input8" class="col-sm-3 col-form-label">{{__('Key')}}</label>
                      <div class="col-sm-9">
                        <input type="text" name="key" placeholder="{{__('Key')}}" value="{{!empty($edititem->id) ? $edititem->key : ''}}" required class="form-control" id="input8">
                      </div>
                    </div>
                    <div class="form-group form-group-margin-bottom-off row">
                      <label for="input9" class="col-sm-3 col-form-label">{{__('Text')}}</label>
                      <div class="col-sm-9">
                        <input type="text" name="value" placeholder="{{__('Text')}}" value="{{!empty($edititem->id) ? $edititem->value : ''}}" class="form-control" id="input9">
                      </div>
                    </div>
                    <div class="form-group form-group-margin-bottom-off row">
                      <label for="input9" class="col-sm-3 col-form-label">{{__('URL')}}</label>
                      <div class="col-sm-9">
                        <input type="text" name="value3" placeholder="{{__('URL')}}" value="{{!empty($edititem->id) ? $edititem->value3 : ''}}" class="form-control" id="input9">
                      </div>
                    </div>

                    <div class="form-group form-group-margin-bottom-off row">
                      <input type="file" name="photo" class="file-upload-default">
                      <div class="input-group col-sm-12">
                        <input type="text" class="form-control file-upload-info" value="{{!empty($edititem->id) ? $edititem->value2 : ''}}" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary me-2 float-end">{{ __('Save') }}</button>
                    <br /><br />
                    <br /><br />
                  </form>
                </div>
                <div class="">
                  <img src="admin/assets/images/screenshot/{{$page->page_name}}.jpg">
                </div>
              </div>
            </div>
          </div>
          @include('admin._footer')
        </div>
      </div>
    </div>
    @include('admin._script')
    <script src="{{asset('admin/assets/js/file-upload.js')}}"></script>
  </body>
</html>