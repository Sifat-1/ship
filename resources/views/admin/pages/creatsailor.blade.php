@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12">
<h3>Create new SailorProfile</h3>
{{-- validation start --}}

@if(session()->has('success'))
  <p class="alet alert-success">
      {{session()->get ('success')}}
  </p>
  @endif

  @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
{{-- validation and succes massege end --}}


<form action="{{route('store.sailor')}}" method="POST">
  @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Sailor Name</label>
        <input name="name" placeholder="Enter Sailor Name" type="text" class="form-control" id="exampleInputName">
    </div>
    <div class="mb-3">
        <label for="exampleInputRank" class="form-label">Sailor rank</label>
    
    {{-- <input name="rank"placeholder="Enter Sailor rank"  type="text" class="form-control" id="exampleInputRank"> --}}
    <select name="rank" class="form-control">
        {{-- <option>Select Rank</option> --}}

        {{-- compact name --}}

        @foreach ($ranks as $item)
        {{-- database new table name --}}
            <option value="{{$item->id}}">{{$item->rank}}</option>
        @endforeach
    </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputAddress" class="form-label">Sailor Address</label>
        <input name="address"placeholder="Enter Sailo Address"  type="text" class="form-control" id="exampleInputAddress">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Sailor Email</label>
        <input name="email"placeholder="Enter Sailo Email"  type="text" class="form-control" id="exampleInputEmail">
    </div>
    <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Sailor PhoneNumber</label>
        <input name="phone"placeholder="Enter Sailo PhoneNumber"  type="number" class="form-control" id="exampleInputPhone">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputShip" class="form-label">Ship Name</label>
        <input name="ship"placeholder="Enter Shipname"  type="text" class="form-control" id="exampleInputShip" >
    </div>
    {{-- <div class="mb-3">
        <label for="exampleInputSimage" class="form-label">Sailor Image</label>
        <input name="sailor_image"placeholder="Enter File"  type="file" class="form-control" id="exampleInputSimage" >
    </div> --}}

  

    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection