@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>

    <form action="" method="">
        @csrf
        <div class="mb-3">
            <label for="exampleInputRank" class="form-label">Select Course</label>
        
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
        <a href="{{route('eligible.sailor')}}" type="button" class="btn btn-success">Search</a>
       </form>
    </div>
   @endsection