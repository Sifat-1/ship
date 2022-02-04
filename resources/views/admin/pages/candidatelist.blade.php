@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
<h3> Showing Candidate List</h3>
@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Birth Date</th>
        <th scope="col">Nationality</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($candidates as $key=>$user)                                                                              
    <tr>
      <th>{{$key+1}}</th>
           <td>{{$user->first_name}}</td>
           <td>{{$user->last_name}}</td>
           <td>{{$user->date}}</td>
           <td>{{$user->nationality}}</td>
           <td>{{$user->phone}}</td>
           <td><img src="{{url('/uploads/candidates/'.$user->image)}}" style="border-radious:1px" width="200px" alt="candidate image"></td>
           <td> <a href="{{route('candiate.view', $user->id)}}"class="btn btn-success">Approve</a>
               <a href="{{route('delete.candidateprofile',$user->id)}}"class="btn btn-danger">Delete</a>
              </td>
    </tr>
    @endforeach
    </tbody>
  </table>
  <div style="padding-top: 10px;"> 
    {{$candidates->links()}}
  </div>
  </div>
@endsection