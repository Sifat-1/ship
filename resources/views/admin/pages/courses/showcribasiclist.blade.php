@extends('master')
@section('content')

<div class="col-xs-12 col-sm-12 col-md-12"><br>
  
<br>

<h4>Criteria for Specific Courses</h4>

<table class="table">
    
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Course Name</th>

        <th scope="col">Criteria Name</th>
        <th scope="col">Required Point</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <tbody>
        @foreach($bcriteria as $key=>$bcriteri)                                                                              
        <tr>
               <td>{{$bcriteri->id}}</td>
               <td>{{$bcriteri->criterialRelation->shortform}}</td>
               <td>{{$bcriteri->name}}</td>
               <td>{{$bcriteri->point}}</td>
               <td>{{$bcriteri->details}}</td>
               
                 
        </tr>
        @endforeach
      
    </tbody>
  </table>
  </div>
  
    @endsection