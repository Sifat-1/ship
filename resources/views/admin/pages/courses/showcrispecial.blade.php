@extends('master')
@section('content')

<div class="col-xs-12 col-sm-12 col-md-12"><br>
  
<br>

<h4> Criteria For Specific Courses</h4>

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
        @foreach($scriteria as $key=>$scriteri)                                                                              
        <tr>
                <td>{{$key+1}}</td>
              
                <td>{{$scriteri->criterialRelation->shortform}}</td>
               <td>{{$scriteri->name}}</td>
               <td>{{$scriteri->point}}</td>
               <td>{{$scriteri->details}}</td>
               
                 
        </tr>
        @endforeach
      
    </tbody>
  </table>


</div>
@endsection