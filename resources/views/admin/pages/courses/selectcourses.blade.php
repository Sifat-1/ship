@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>

    @if(session()->has('success'))

    <p>
    <span class="badge badge-success">{{session()->get('success')}}
    </span>
    </p>

    @endif

    <form action="{{route('eligible.sailor')}}" method="GET">
      
        <div class="mb-3">
            <label for="exampleInputRank" class="form-label">Select Course</label>
        
        {{-- <input name="rank"placeholder="Enter Sailor rank"  type="text" class="form-control" id="exampleInputRank"> --}}
        <select name="course_id" class="form-control">
            {{-- <option>Select Rank</option> --}}
    
            {{-- compact name --}}
    
            @foreach ($courses as $item)
            {{-- database new table name --}}
                <option value="{{$item->id}}">{{$item->shortform}}</option>
            @endforeach
        </select>
        </div>
      <button type="submit" class="btn btn-success">Search</button>
       </form>
    </div>
   @endsection