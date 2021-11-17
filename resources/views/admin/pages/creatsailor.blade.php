@extends('master')
@section('content')
<h3>Create new Sailor_Profile</h3>



<form action="{{route('store.sailor')}}" method="POST">
  @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Sailor Name</label>
        <input name="name" placeholder="Enter Sailor Name" type="text" class="form-control" id="exampleInputName">
    </div>
    <div class="mb-3">
        <label for="exampleInputRank" class="form-label">Sailor rank</label>
        <input name="rank"placeholder="Enter Sailor rank"  type="text" class="form-control" id="exampleInputRank">
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

  

    <button type="submit" class="btn btn-success">Submit</button>
</form>


@endsection