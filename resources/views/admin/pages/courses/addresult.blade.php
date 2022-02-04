@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>

   <h4>Adding Course Point</h4> 

   @if(session()->has('success'))
   <p class="alet alert-success">
       {{session()->get ('success')}}
   </p>
   @endif <br>
   <form action="{{route('store.point',$sailors->id)}}" method="POST">
    @csrf
    <input type="hidden" name="$sailor_id" value="{{$sailors->id}}">
   
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
        <label for="exampleInputResult" class="form-label">Result Point (result should  be in between 1 to 5)</label>
        <input name="point" max='5' required  placeholder="Enter Course Point" type="number" class="form-control" id="exampleInputResult">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
@endsection
