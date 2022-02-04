@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
<h3> Showing SailorProfile List </h3>

{{-- success message code --}}
@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif
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


  {{-- <a href="{{route('creat.sailor')}}" class="button">Create New_Profile</a> --}}
<!-- <button class="button">View Chart</button> -->

<form action="{{route('bring.sailor')}}" method="GET">
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <input value="{{$key}}" type="text" placeholder="Search" name="search" class="form-control">
      </div>
      <div class="col-md-4">
          <button type="submit" class="btn btn-success">Search</button>
      </div>
  </div>
  </form>

{{-- @dd($sailors) --}}
@if($sailors)
@if($key)
<h4>
    Your are searching for: {{$key}}. found: {{$sailors->count()}}
</h4>
@endif
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Religion</th>
      <th scope="col">Rank</th>
      <th scope="col">Ship</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Blood_Group</th>
      <th scope="col">Point</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>   
    @foreach($sailors as $key=>$person)                                                                              
    <tr>
            <th>{{$key+1}}</th>
            <td>
              <img src="{{url('uploads/candidates/',$person->pullcandidate->image)}}" alt="">
            </td>
           <td>{{$person->pullcandidate->first_name}} {{$person->pullcandidate->last_name}}</td>
           <td>{{$person->pullcandidate->religion}}</td>

           {{-- new created method has been declared with databse table fild name--}}
           <td>{{$person->rankcategory->rank}}</td>
           <td>{{$person->shipcategory->name}}</td>
           <td>{{$person->pullcandidate->age}}</td>
           <td>{{$person->pullcandidate->email}}</td>
           <td>{{$person->pullcandidate->bloodgroup}}</td>
            <td>{{$person->point}}</td> 
           
           <td>
             <a href="{{route('view.sailorprofile',$person->id)}}" class="btn btn-primary">View</a>
            <br><br>
             {{-- <a href="{{route('edit.sailor',$person->id)}}"class="btn btn-success">Update</a> --}}
             <a href="{{route('delete.sailorprofile',$person->id)}}"class="btn btn-danger">Delete</a>

             {{-- <a href="{{route('view.rank',$value->id)}}" class="btn btn-primary">View</a> --}}
             
           </td>
           
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
<div style="padding-top: 10px;"> 
  {{$sailors->links()}}
</div>
@else
<h1>No data found</h1>
@endif

</div>

@endsection