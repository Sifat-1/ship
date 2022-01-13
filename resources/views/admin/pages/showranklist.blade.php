@extends('master')
@section('content')

<h3> Showing SailorRank List </h3>

@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 12px 17px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 22px 8px;
  width:11%;
  cursor: pointer;
}

/* .button1 {background-color: #4CAF50;} Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>
<body>


{{-- <button class="button button1">Green</button> --}}
{{-- link --}}

<a href="{{route('create.rank')}}" class="button button2">Creat Rank</a>

</body>
</html>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Rank Name</th>
        <th scope="col">Designation</th>
        <th scope="col">Rank Image</th>
        <th scope="col">Action</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($ranks as $key=>$value) 
      <tr>
        <th>{{$key+1}}</th>
        <td>{{$value->rank}}</td>
        <td>{{$value->designation}}</td>
       
        <td><img src="{{url('/uploads/ranks/'.$value->rank_image)}}" style="border-radious:1px" width="200px" alt="rank image"></td>
        <td>
          <a href="{{route('view.rank',$value->id)}}" class="btn btn-primary">View</a>
          <a href=""  class="btn btn-success">Update</a>
          <a href="{{route('delete.sailorrank',$value->id)}}" class="btn btn-danger">Delete</a>
        </td>
       
 </tr>
        
 @endforeach
    </tbody>
  </table>


@endsection
