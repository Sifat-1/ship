@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12">
    <form action="{{route('update.sailorrank',$sailors->id)}}" method="POST">
@method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputRank" class="form-label">Sailor rank</label>
        
        {{-- <input name="rank"placeholder="Enter Sailor rank"  type="text" class="form-control" id="exampleInputRank"> --}}
        <select name="rank" class="form-control">
            {{-- <option>Select Rank</option> --}}
    
            {{-- compact name --}}
    
            @foreach ($ranks as $item)
            {{-- database new table name --}}
                <option  @if ($sailors->rank_id==$item->id)
                    selected
                @endif
                value="{{$item->id}}">{{$item->rank}}</option>
            @endforeach
        </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>

    </form>
    </div>
    @endsection