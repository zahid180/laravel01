@extends('admin.master')
@section('contain')
<section>
  <div class="container">
    <div class="row">
      <table class="table table-hover table-bordered">
        <tr>
          <th>Product Id</th>
          <th>{{$Product->id}}</th>
        </tr>
        <tr>
          <th>Product Name</th>
          <th>{{$Product->productName}}</th>
        </tr>
        <tr>
          <th>Category Name</th>
          <th>{{$Product->categoryName}}</th>
        </tr>
        <tr>
          <th>Manufacture Name</th>
          <th>{{$Product->manufactureName}}</th>
        </tr>
        <tr>
          <th>Product Price</th>
          <th>{{$Product->productPrice}}</th>
        </tr>
        <tr>
          <th>Product Quentity</th>
          <th>{{$Product->productQuantity}}</th>
        </tr>
        <tr>
          <th>Product Short Description</th>
          <th>{!!$Product->productshortDescription!!}</th>
        </tr>
        <tr>
          <th>Product Long Description</th>
          <th>{!!$Product->productLongDescription!!}</th>
        </tr>
        <tr>
          <th>Product Image</th>
          <th><img class="img-fluid" src="{{asset($Product->productImage)}}" alt=""> </th>
        </tr>
        <tr>
          <th>Publication Status</th>
          <th>{{$Product->publicationStatus}}</th>
        </tr>

      </table>
    </div>
  </div>
</section>
@endsection
