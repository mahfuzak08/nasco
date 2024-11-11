<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> {{ __('Product')}}
      </h3>
      <nav aria-label="breadcrumb">
        <a href="{{route('addProduct')}}" class="btn btn-success">Add New Product</a>
      </nav>
    </div>
    <div class="row" style="background: #fff;padding: 20px 0px;">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> {{__('PID')}} </th>
              <th colspan="2"> {{__('Product Name')}} </th>
              <th> {{__('Category Name')}} </th>
              <th> {{__('Action')}} </th>
            </tr>
          </thead>
          <tbody>
            @if(count($products)>0)
              @foreach($products as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td><img src="{{$row->image}}" width="50px" height="30px"></td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->cat_name}}</td>
                  <td>
                    <button onclick="window.location='{{ url("product?id=".$row->id."&edit=yes") }}'" class="btn btn-inverse-warning btn-icon"><i class="mdi mdi-lead-pencil"></i></button>
                    <button onclick="window.location='{{ url("product?id=".$row->id."&delete=yes") }}'" class="btn btn-inverse-danger btn-icon"><i class="mdi mdi-delete-forever"></i></button>
                  </td>
                </tr>
              @endforeach
            @else
              <tr>
                <td colspan="5">No Data Found</td>
              </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>