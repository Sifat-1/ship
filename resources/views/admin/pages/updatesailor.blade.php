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


<form action="{{route('update.sailor',$sailor->id)}}" method="POST">
    @method('PUT')
  @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Sailor Name</label>
        <input name="name" value="{{ $sailor->name}}" placeholder="Enter Sailor Name" type="text" class="form-control" id="exampleInputName">
    </div>

    {{-- complex --}}
    
    <div class="mb-3">
        <label for="exampleInputRank" class="form-label">Sailor rank</label>
    
    {{-- <input name="rank"placeholder="Enter Sailor rank"  type="text" class="form-control" id="exampleInputRank"> --}}
    <select name="rank" class="form-control" id="exampleInputRank">
        {{-- <option>Select Rank</option> --}}
        {{-- compact name --}}

        

        @foreach ($ranks as $item)
      
            <option 
                @if ($sailor->rank_id==$item->id)
                    selected
                @endif
                {{-- value="{{$item->id}}">{{$item->name}}</option> --}}
                value="{{$item->id}}">{{$item->rank}}</option>
            
        @endforeach
    </select>
    </div>
   
    <div class="mb-3">
        <label for="exampleInputAddress" class="form-label">Sailor Address</label>
        <input name="address" value="{{ $sailor->address}}" placeholder="Enter Sailo Address"  type="text" class="form-control" id="exampleInputAddress">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Sailor Email</label>
        <input name="email" value="{{ $sailor->email}}" placeholder="Enter Sailo Email"  type="text" class="form-control" id="exampleInputEmail">
    </div>
    <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Sailor PhoneNumber</label>
        <input name="phone" value="{{ $sailor->phone}}" placeholder="Enter Sailo PhoneNumber"  type="number" class="form-control" id="exampleInputPhone">
    </div>
    
    <div class="mb-3">
        <label for="exampleInputShip" class="form-label">Ship Name</label>
        <input name="ship" value="{{ $sailor->ship}}" placeholder="Enter Shipname"  type="text" class="form-control" id="exampleInputShip" >
    </div>
    {{-- <div class="mb-3">
        <label for="exampleInputSimage" class="form-label">Sailor Image</label>
        <input name="sailor_image"placeholder="Enter File"  type="file" class="form-control" id="exampleInputSimage" >
    </div> --}}

  

    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection