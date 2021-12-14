@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12">
    <h3>Creat New Courses</h3>

<form  action="{{route('store.basic','store.special','store.other')}}" method="POST">
    
    @csrf
    <div class="form-group">
      <label for="exampleFormControlShort">Course Short_Form</label>
      <input name="shortform" type="text" class="form-control" id="exampleFormControlShort" placeholder="Enter Short Form">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFull">Course Full_Name</label>
        <input name="details" type="text" class="form-control" id="exampleFormControlFull" placeholder="Enter Description">
      </div>
    <div class="form-group">
      <label  for="exampleFormControlSelect1">Course Variation</label>
      <select name="variation" class="form-control" id="exampleFormControlSelect1" >
        <option>Basic </option>
        <option>Specialized </option>
        <option>Others </option>
      
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
