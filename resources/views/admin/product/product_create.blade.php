<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> {{ __('Product')}}
        </h3>
        <nav aria-label="breadcrumb">
            <a href="{{route('product')}}" class="btn btn-dark">Back</a>
        </nav>
    </div>
    <div class="row" style="background: #fff;padding: 20px 0px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{route('productStore')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label>Product Category</label>
                            <select name="cat_id" class="form-control" style="color: #000;border: 1px solid #333;height: 40px;">
                                <option value="0">Select Category</option>
                                @foreach($categories as $sr)
                                    <option value="{{$sr->id}}">{{$sr->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Details</label>
                            <input type="text" name="details" class="form-control" placeholder="Product name">
                        </div>
                        <div class="form-group" id="specifications-container" data-container="specifications">
                            <label>Product Specifications</label>
                            <div class="input-group specification-input">
                                <input type="text" name="specifications[]" class="form-control" placeholder="Product specifications">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-inverse-dark btn-icon add-input-btn" data-type="specifications" type="button">
                                        <i class="mdi mdi-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>                        
                        <div class="form-group" id="features-container" data-container="features">
                            <label>Product Features</label>
                            <div class="input-group feature-input">
                                <input type="text" name="features[]" class="form-control" placeholder="Product features">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-inverse-dark btn-icon add-input-btn" data-type="features" type="button">
                                        <i class="mdi mdi-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Product price">
                        </div>
                        <div class="form-group form-group-margin-bottom-off row">
                            <input type="file" id="file" name="photo" class="file-upload-default">
                            <div class="input-group col-sm-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                        <a href="{{route('product')}}" class="btn btn-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.product.localscript')