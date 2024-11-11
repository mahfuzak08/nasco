<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> {{ __('Category')}}
      </h3>
      <nav aria-label="breadcrumb">
        <a href="{{route('addCat')}}" class="btn btn-success">Add New Category</a>
      </nav>
    </div>
    <div class="row" style="background: #fff;padding: 20px 0px;">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> {{__('Key')}} </th>
              <th> {{__('Category Name')}} </th>
              <th> {{__('Parent Name')}} </th>
              <th> {{__('Action')}} </th>
            </tr>
          </thead>
          <tbody>
            @if(count($categories)>0)
              @foreach($categories as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->cat_name}}</td>
                  <td>
                    @if($row->parent > 0)
                      @foreach($categories as $sr)
                        @if($row->parent == $sr->id)
                          {{$sr->cat_name}}
                        @endif
                      @endforeach
                    @endif
                  </td>
                  <td>
                    <button onclick="window.location='{{ url("category?id=".$row->id."&edit=yes") }}'" class="btn btn-inverse-warning btn-icon"><i class="mdi mdi-lead-pencil"></i></button>
                    <button onclick="window.location='{{ url("category?id=".$row->id."&delete=yes") }}'" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button>
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="4">No Data Found</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>