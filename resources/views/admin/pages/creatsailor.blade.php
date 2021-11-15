@extends('master')
@section('content')
<h3>Create new Sailor_Profile</h3>



<form action="{{route('store.sailor')}}" method="POST">
  @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Sailor Name</label>
        <input name="name" placeholder="Enter Sailor Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Sailor Id</label>
        <input name="Id"placeholder="Enter Sailo Id"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Sailor Description</label>
        <input name="description" placeholder="Enter Sailor Description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

  

    <button type="submit" class="btn btn-success">Submit</button>
</form>


@endsection