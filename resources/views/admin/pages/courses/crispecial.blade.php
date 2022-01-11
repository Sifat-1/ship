@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>
    <h4>Create Specialized Courses Criteria</h4>

<form action="{{route('store.scriteria',$course->id)}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlName">Criteria Name</label>
      <input name="name" type="text" class="form-control" id="exampleFormControlName" placeholder="Enter Criteria Name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlPoint">Required Point</label>
        <input name="point" type="number" class="form-control" id="exampleFormControlPoint" placeholder="Enter Point value">
      </div>
      
    
    <div class="form-group">
      <label for="exampleFormControlTextarea">Details</label>
      <textarea name="details"class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
@endsection