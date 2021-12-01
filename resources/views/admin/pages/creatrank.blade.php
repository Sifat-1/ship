@extends('master')
@section('content')
<h3>Create new SailorRank</h3><br><br>

{{-- validation and succes massege end --}}


<form action="{{route('store.rank')}}" method="POST">
  @csrf
    <div class="mb-3">
        <label for="exampleInputRank" class="form-label">Sailor Rank</label>
        <input name="rank" placeholder="Enter Sailor Rank" type="text" class="form-control" id="exampleInputRank">
    </div>
    <div class="mb-3">
        <label for="exampleInputDesignation" class="form-label">Sailor Designation</label>
        <input name="designation"placeholder="Enter Sailor Designation"  type="text" class="form-control" id="exampleInputDesignation">
    </div>
    

    <button type="submit" class="btn btn-success">Submit</button>
</form>


@endsection