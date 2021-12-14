@extends('master')
@section('content')

<div class="col-xs-12 col-sm-12 col-md-12"><br>
  
<br>

<h4>Others Courses</h4>

<table class="table">
    
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Course Short_Form</th>

        <th scope="col">Criteria Namet</th>
        <th scope="col">Required Point</th>
        <th scope="col">Details</th>
      </tr>
    </thead>
    <tbody>
        @foreach($bcriteria as $bcriteri)                                                                              
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