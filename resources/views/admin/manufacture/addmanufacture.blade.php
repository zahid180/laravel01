@extends('admin.master')
@section('contain')
<div class="row">
  <div class="col-lg-12">
    <h3 class="text-center text-success">{{Session::get('massage')}}</h3>
    <hr/>
    <div class="well">
      {!!Form::open(['url'=>'manufacture/save','method'=>'POST','class'=>'form-horizontal'])!!}

        <div class="form-group">
          <label for="Manufacture">Manufacture Name</label>
          <div class="col-sm-10">
            <input type="text" name="manufactureName" class="form-control" value="">
              <span class="text-danger">{{$errors->has('manufactureName') ? $errors->first('manufactureName'):''}}</span>
          </div>
        </div>
        <div class="form-group">
          <label for="Manufacture">Manufacture description</label>
          <div class="col-sm-10">
            <textarea type="text" name="manufactureDescription" class="form-control" rows="8" cols="80"></textarea>
            <span class="text-danger">{{$errors->has('manufactureDescription') ? $errors->first('manufactureDescription'):''}}</span>
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
            <button type="submit" name="zahid" class="btn btn-success btn-block">Save Manufacture Info</button>
          </div>
        </div>

      {!!Form::close()!!}

    </div>
  </div>
</div>

@endsection
