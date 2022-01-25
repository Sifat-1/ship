


@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 

<h3> Showing SailorRank List </h3>
<br>
<br>

@if(session()->has('success'))
<p class="alert alert-success">
    {{session()->get('success')}}
</p>
@endif
{{-- <button class="button button1">Green</button> --}}
{{-- link --}}


<a href="{{route('create.rank')}}" button type="submit" class="btn btn-info">Creat Rank</button></a>

<br>
<br>
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
</div>

@endsection
