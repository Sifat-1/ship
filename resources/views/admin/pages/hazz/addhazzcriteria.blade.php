@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12">
<h3>Create Hazz_Criteria</h3><br><br>

{{--  succes massege --}}
 {{-- success massege  --}}
 @if(session()->has('success'))
 <p class="alet alert-success">
     {{session()->get ('success')}}
 </p>
 @endif <br>


<form action="{{route('store.hazzcriteria')}}" method="POST" >
  @csrf
    <div class="mb-3">
        <label for="exampleInputRank" class="form-label">Sailor Religion</label>
        <input name="religion" placeholder="Enter Sailor Religion" type="text" class="form-control" id="exampleInputRank">
    </div>
    <div class="mb-3">
        <label for="exampleInputDesignation" class="form-label">Sailor Age</label>
        <input name="age"placeholder="Enter Sailor Age"  type="number" class="form-control" id="exampleInputDesignation">
    </div>
    <div class="mb-3">
        <label for="exampleInputDesignation" class="form-label">Sailor Required_Point</label>
        <input name="point" placeholder="Enter Sailor Required_Point"  type="number" class="form-control" id="exampleInputDesignation">
    </div>
    
    

    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection