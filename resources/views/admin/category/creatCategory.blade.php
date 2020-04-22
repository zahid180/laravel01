@extends('admin.master')
@section('contain')
<div class="row">
  <div class="col-lg-12">
    <div class="well">
      {!!Form::open(['url'=>'category/save','method'=>'POST','class'=>'form-horizontal'])!!}

        <div class="form-group">
          <label for="">Category Name</label>
          <div class="col-sm-10">
            <input type="text" name="categoryName" class="form-control" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="">Category description</label>
          <div class="col-sm-10">
            <textarea type="text" name="categoryDescription" class="form-control" rows="8" cols="80"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="">Publication Status</label>
          <div class="col-sm-10">
            <select class="form-control" name="publicationStatus">
              <option>Select Publication Status</option>
              <option value="1">Publish</option>
              <option value="0">Unpublish</option>

            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <button type="submit" name="zahid" class="btn btn-success btn-block">Save Category Info</button>
          </div>
        </div>

      {!!Form::close()!!}

    </div>
  </div>
</div>

@endsection
