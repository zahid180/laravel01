@extends('admin.master')

@section('contain')
<div class="row">
  <div class="col-lg-12">
    <h3 class="text-center text-success">{{Session::get('massage')}}</h3>
    <hr/>
    <div class="well">
      {!!Form::open(['url'=>'product/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'EditProductForm'])!!}

        <div class="form-group">
          <label for="">Product Name</label>
          <div class="col-sm-10">
            <input type="text" name="productName" value="{{$Product->productName}}" class="form-control">
            <input type="hidden" name="productId" value="{{$Product->id}}" class="form-control">
            <span class="text-danger">{{$errors->has('productName') ? $errors->first('productName'):''}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="">category Name</label>
          <div class="col-sm-10">
            <select class="form-control" name="categoryId">
              <option>Select Category Status</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->categoryName}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="">Manufacture Name</label>
          <div class="col-sm-10">
            <select class="form-control" name="manufactureId">
              <option>Select Manufacture Status</option>
              @foreach($manufactures as $manufacture)
              <option value="{{$manufacture->id}}">{{$manufacture->manufactureName}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="">Product Price</label>
          <div class="col-sm-10">
            <input type="number" name="productPrice"value="{{$Product->productPrice}}" class="form-control">
            <span class="text-danger">{{$errors->has('productPrice') ? $errors->first('productPrice'):''}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="">Product Quantity</label>
          <div class="col-sm-10">
            <input type="number" name="productQuantity" value="{{$Product->productQuantity}}" class="form-control" >
            <span class="text-danger">{{$errors->has('productQuantity') ? $errors->first('productQuantity'):''}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="">Product Short Description</label>
          <div class="col-sm-10">
            <textarea type="text" name="productshortDescription" class="form-control" rows="8" cols="80">
              {{$Product->productshortDescription}}
            </textarea>
            <span class="text-danger">{{$errors->has('productshortDescription') ? $errors->first('productshortDescription'):''}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="">Product Long Description</label>
          <div class="col-sm-10">
            <textarea type="text" name="productLongDescription" class="form-control" rows="8" cols="80">
              {{$Product->productLongDescription}}
            </textarea>
            <span class="text-danger">{{$errors->has('productLongDescription') ? $errors->first('productLongDescription'):''}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="">Product Image</label>
          <div class="col-sm-10">
            <input type="file" name="productImage" accept="image/*">
            <img src="{{asset($Product->productImage)}}" height="300px" width="300px">
            <span class="text-danger">{{$errors->has('productPrice') ? $errors->first('productPrice'):''}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="">Publication Status</label>
          <div class="col-sm-10">
            <select class="form-control" name="publicationStatus">
              <option value="0">Select Publication Status</option>
              <option value="1">Publish</option>
              <option value="0">Unpublish</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <button type="submit" name="zahid" class="btn btn-success btn-block">Update Product Info</button>
          </div>
        </div>

      {!!Form::close()!!}

    </div>
  </div>
</div>
<script type="text/javascript">
document.forms['EditProductForm'].elements['publicationStatus'].value={{$Product->publicationStatus}}
document.forms['EditProductForm'].elements['categoryId'].value={{$Product->categoryId}}
document.forms['EditProductForm'].elements['manufactureId'].value={{$Product->manufactureId}}
</script>

@endsection
