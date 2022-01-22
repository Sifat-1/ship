@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>

   <h4>Adding Course Point</h4> 
   <form action="{{route('store.point',$sailors->id)}}" method="POST">
    @csrf
   
    <div class="mb-3">
        <label for="exampleInputCourse" class="form-label">Select Course</label>
    
    {{-- <input name="rank"placeholder="Enter Sailor rank"  type="text" class="form-control" id="exampleInputRank"> --}}
    <select name="shortform" class="form-control">
        {{-- <option>Select Rank</option> --}}

        {{-- compact name --}}

        @foreach ($courses as $item)
        {{-- database new table name --}}
            <option value="{{$item->id}}">{{$item->shortform}}</option>
        @endforeach
    </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputResult" class="form-label">Result Point</label>
        <input name="point" placeholder="Enter Course Point" type="number" class="form-control" id="exampleInputResult">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection
