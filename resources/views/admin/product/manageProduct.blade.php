@extends('admin.master')
@section('contain')
<hr>
  <h2 class="text-center text-success">{{Session::get('massage')}}</h2>
<section>
  <div class="container">
    <div class="row">
      <table class="table table-hover table-bordered">
        <tr>
          <th>Product Name</th>
          <th>Category Name</th>
          <th>Manufacture Name</th>
          <th>Product Price</th>
          <th>Product Quantity</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
        @foreach($Products as $Product)
        <tr>
          <td>{{$Product->productName}}</td>
          <td>{{$Product->categoryName}}</td>
          <td>{{$Product->manufactureName}}</td>
          <td>TK. {{$Product->productPrice}}</td>
          <td>{{$Product->productQuantity}}</td>
          <td>{{$Product->publicationStatus==1 ?'Publish':'Unpublish'}}</td>
          <td>
            <a href="{{url('/product/view/'.$Product->id)}}" class="btn btn-success">View</a>
            <a href="{{url('/product/edit/'.$Product->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('/product/delet/'.$Product->id)}}" class="btn btn-success" onclick="return confirm('Are You Sure Delete data')">Delet</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</section>
@endsection
