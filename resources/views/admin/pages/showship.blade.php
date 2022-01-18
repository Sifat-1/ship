@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
<h3> Showing Ship List </h3>
{{-- <a href="{{route('create.ship')}}" --}}
 <a href="{{route('create.ship')}}" button type="submit" class="btn btn-primary">Creat Ship</button> </a>
 <br><br>
<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Ship Name</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <tbody>
        @foreach($ships as $key=>$value) 
      <tr>
      
      
        <th>{{$key+1}}</th>
        <td>{{$value->name}}</td>
        <td>{{$value->details}}</td>
        
   
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection