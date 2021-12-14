@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
<h3> Showing SailorProfile List </h3>
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

           {{-- new created method has been declared with databse table fild name--}}
           <td>{{$person->rankcategory->rank}}</td>
           <td>{{$person->email}}</td>
    </tr>
    @endforeach

    {{-- @foreach($Basic_courses as $course)                                                                              
    <tr>
            <th>{{$course->id}}</th>
           <td>{{$course->name}}</td>
           <td>{{$course->c_type}}</td>       
    </tr>
    @endforeach --}}
  </tbody>
</table>

</body>

</html>
</div>

@endsection