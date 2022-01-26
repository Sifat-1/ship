@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
    
    <br><br>
<h3> Showing Eligible Sailor List who will be able to go for Hazz:</h3>
<br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sailor_Name</th>
        <th scope="col">Sailor_Rank</th>
        <th scope="col">Sailor Age</th>
        <th scope="col">Sailor Religion</th>
        <th scope="col">Sailor Obtained_Point</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    @foreach($candidates as $key=>$value) 
    @if($value->sailor->point >= $hazz->point && $value->sailor->is_hazz_done == 'no')
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$value->first_name}} {{$value->last_name}}</td>
        <td>{{$value->sailor->rankcategory->rank}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->religion}}</td>
      
        <td>{{$value->sailor->point}}</td>
        <td>
            <a href="{{route('done.eligiblehazzsailor',$value->sailor->id)}}" class="btn btn-success"> Done</a>
        </td>
        </tr>
    @endif
    @endforeach 
      

    
         

</tbody>
</table>


</div>

@endsection
        
        
       
    