<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> {{ __('Category')}}
        </h3>
        <nav aria-label="breadcrumb">
            <a href="{{route('category')}}" class="btn btn-dark">Back</a>
        </nav>
    </div>
    <div class="row" style="background: #fff;padding: 20px 0px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{route('category-store')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$cat->id}}" />
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" value="{{$cat->cat_name}}" name="cat_name" class="form-control" placeholder="Category Name">
                        </div>
                        <div class="form-group">
                            <label>Parent Category Name</label>
                            <select name="parent" class="form-control" style="color: #000;border: 1px solid #333;height: 40px;">
                                <option value="0" {{$cat->parent == 0 ? 'selected' : ''}}>Select Parent</option>
                                @foreach($categories as $sr)
                                    <option value="{{$sr->id}}" {{$cat->parent == $sr->id ? 'selected' : ''}}>{{$sr->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>