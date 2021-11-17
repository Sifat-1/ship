@extends('master')
@section('content')
<h3> Showing Sailor_Profile List </h3>
<!-- <a href="" class="btn btn-success">Create new Sailor_profile</a> -->
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 6px 17px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 22px 8px;
  cursor: pointer;
  width:11%;
}
</style>
</head>
<body>




<a href="/CreatSailor" class="button">Create New_Profile</a>
<!-- <button class="button">View Chart</button> -->

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Rank</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>    
    @foreach($sailors as $person)                                                                              
    <tr>
      <th>{{$person->id}}</th>
           <td>{{$person->name}}</td>
           <td>{{$person->rank}}</td>
           <td>{{$person->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>

@endsection