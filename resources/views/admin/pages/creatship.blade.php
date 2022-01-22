@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
<h3>Form to Create Ship</h3></button>
@if(session()->has('success'))
<p class="alet alert-success">
    {{session()->get ('success')}}
</p>
@endif 
    
<form action="{{route('store.ship')}}" method="POST" >
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Ship Name</label>
      <input name="name"type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Ship Name">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Ship Type</label>
      <input name="type"type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Ship Type">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Ship Details</label>
      <input name="details" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Ship Details">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>
@endsection