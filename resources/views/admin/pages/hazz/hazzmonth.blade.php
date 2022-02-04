@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
    <br><br>
    
<h3>Adding Hazz_Month Record</h3>
   
<form action="{{route('store.hazzmonth')}}" method="POST" >
    @csrf
       
    {{-- <input type="hidden" name="sailor_id" value="{{$sailors->id}}"> --}}

        
        <div class="form-group">
          <label for="exampleFormControlSelect1">From Date</label>
          <select name="month" class="form-control" id="exampleFormControlSelect1">
            
           
          </select>
        </div>
        <button type="submit" class="btn btn-success">Ok</button>

      </form>
</div>

@endsection
        