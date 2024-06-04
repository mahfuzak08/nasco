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
            <div class="row" style="background: #FFFFFF">
              <div class="col-md-4 col-12">
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
                                <td> {{ substr($row->key, 0, 10 ) }} </td>
                                <td> 
                                  {{ substr($row->value, 0, 10 )}} 
                                  @if($row->value2)
                                  <br>
                                  {{ substr($row->value2, 0, 10) }} 
                                  @endif
                                  @if($row->value3)
                                  <br>
                                  {{ substr($row->value3, 0, 10) }} 
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
              <div class="col-md-8 col-12">
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
                        <input type="hidden" name="section_name" required value="{{!empty($edititem->id) ? $edititem->section_name : ''}}">
                        <input type="text" class="form-control" value="{{!empty($edititem->id) ? $edititem->section_name : ''}}" disabled>
                      </div>
                    </div>
                    <div class="form-group form-group-margin-bottom-off row">
                      <label for="input8" class="col-sm-3 col-form-label">{{__('Key')}}</label>
                      <div class="col-sm-9">
                        <input type="text" name="key" placeholder="{{__('Key')}}" value="{{!empty($edititem->id) ? $edititem->key : ''}}" required class="form-control" id="input8">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="editor" class="col-sm-3 col-form-label">{{__('Text')}}</label>
                      <div class="col-sm-9">
                        {{-- <div id="editor">{{!empty($edititem->id) ? $edititem->value : ''}}</div> --}}
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
                          @if(! empty($edititem->id) && !empty($edititem->value2))
                            <div class="col-sm-6">
                              <img src="{{$edititem->value2}}" style="max-width:300px; max-height: 150px">
                              @php
                              $imagePath = public_path($edititem->value2);
                              list($width, $height) = getimagesize($imagePath);
                              // echo $width. " = ". $height;
                              @endphp
                            </div>
                            <div class="col-sm-3">
                              Width = {{$width}} px <br>
                              Height = {{$height}} px <br>
                              <input type="text" class="form-control file-upload-info" value="{{$edititem->value2}}" disabled="" placeholder="Upload Image">
                            </div>
                            <div class="col-sm-3">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                              </span>
                            </div>
                          @else
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                            </span>
                          @endif
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