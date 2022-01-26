@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
    <br><br>
    <a href="{{route('creat.hazzcriteria')}}" button type="button" class="btn btn-success">Creat Criteria</button></a>
    <br><br>
<h3> Showing Hazz_Criterial List</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sailor_Religion</th>
        <th scope="col">Sailor_Age</th>
        <th scope="col">Sailor Required_Point</th>
        {{-- <th scope="col">Action</th> --}}
    </tr>
</thead>
<tbody>
    @foreach($hazz as $key=>$value) 
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$value->religion}}</td>
      <td>{{$value->age}}</td>
      <td>{{$value->point}}</td>

    </tr>
    @endforeach
     

    
         

</tbody>
</table>
<br><br>

<a href="{{route('show.eligiblehazzsailor')}}" button type="button" class="btn btn-primary">Eligible Sailor</button></a>
<br> <br>

<h3> The Marked Sailors List who have alreay done their HAzz </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Sailor_Name</th>
      <th scope="col">Sailor_Rank</th>
      <th scope="col">Sailor_Religion</th>
      <th scope="col">Sailor_Age</th>
      <th scope="col">Sailor Obtained_Point</th>
      {{-- <th scope="col">Action</th> --}}
  </tr>
</thead>
<tbody>
  @foreach($sailors as $key=>$value) 
  <tr>
    <th>{{$key+1}}</th>
    <td>{{$value->pullcandidate->first_name}} {{$value->pullcandidate->last_name}}</td>
    <td>{{$value->rankcategory->rank}}</td>
    <td>{{$value->pullcandidate->religion}}</td>
    <td>{{$value->pullcandidate->age}}</td>
    <td>{{$value->point}}</td>

  </tr>
  @endforeach
       

</tbody>
</table>
</div>

@endsection
        
        
       
    