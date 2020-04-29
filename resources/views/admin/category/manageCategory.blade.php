@extends('admin.master')
@section('contain')
<hr>
  <h2 class="text-center text-success">{{Session::get('massage')}}</h2>
<section>
  <div class="container">
    <div class="row">
      <table class="table table-hover table-bordered">
        <tr>
          <th>Id</th>
          <th>Category Name</th>
          <th>Category Discription</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
        @foreach($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->categoryName}}</td>
          <td>{!!$category->categoryDescription!!}</td>
          <td>{{$category->publicationStatus==1 ?'Publish':'Unpublish'}}</td>
          <td>
            <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('/category/delet/'.$category->id)}}" class="btn btn-success" onclick="return confirm('Are You Sure Delete data')">Delet</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</section>
@endsection
