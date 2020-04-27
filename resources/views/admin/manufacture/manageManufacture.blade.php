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
          <th>Manufactures Name</th>
          <th>Manufactures Discription</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
        @foreach($manufactures as $manufacture)
        <tr>
          <td>{{$manufacture->id}}</td>
          <td>{{$manufacture->manufactureName}}</td>
          <td>{{$manufacture->manufactureDescription}}</td>
          <td>{{$manufacture->publicationStatus==1 ?'Publish':'Unpublish'}}</td>
          <td>
            <a href="{{url('/manufacture/edit/'.$manufacture->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('/manufacture/delet/'.$manufacture->id)}}" class="btn btn-success" onclick="return confirm('Are You Sure Delete data')">Delet</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</section>
@endsection
