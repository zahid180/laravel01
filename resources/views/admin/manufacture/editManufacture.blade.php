@extends('admin.master')
@section('contain')
<div class="row">
  <div class="col-lg-12">
    <div class="well">
      {!!Form::open(['url'=>'manufacture/update','method'=>'POST','name'=>'EditManufactureForm', 'class'=>'form-horizontal'])!!}

        <div class="form-group">
          <label for="">Manufacture Name</label>
          <div class="col-sm-10">
            <input type="text" name="manufactureName" value="{{$manufacture->manufactureName}}" class="form-control">
            <input type="hidden" name="manufactureId" value="{{$manufacture->id}}" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="">Manufacture Description</label>
          <div class="col-sm-10">
            <textarea type="text" name="manufactureDescription" class="form-control" rows="8" cols="80">
              {{$manufacture->manufactureDescription}}
            </textarea>
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
            <button type="submit" name="zahid" class="btn btn-success btn-block">Update Manufacture Info</button>
          </div>
        </div>

      {!!Form::close()!!}

    </div>
  </div>
</div>

<script type="text/javascript">
document.forms['EditManufactureForm'].elements['publicationStatus'].value={{$manufacture->publicationStatus}}

</script>

@endsection
