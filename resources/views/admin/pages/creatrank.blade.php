@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12">
<h3>Create new SailorRank</h3><br><br>

{{-- validation and succes massege end --}}


<form action="{{route('store.rank')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
        <label for="exampleInputRank" class="form-label">Sailor Rank</label>
        <input name="rank" placeholder="Enter Sailor Rank" type="text" class="form-control" id="exampleInputRank">
    </div>
    <div class="mb-3">
        <label for="exampleInputDesignation" class="form-label">Sailor Designation</label>
        <input name="designation"placeholder="Enter Sailor Designation"  type="text" class="form-control" id="exampleInputDesignation">
    </div>
    <div class="mb-3">
        <label for="exampleInputDesignation" class="form-label">Rank Image</label>
        <input name="rank_image" placeholder="Enter Sailor Designation"  type="file" class="form-control" id="exampleInputDesignation">
    </div>
    
    

    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection