@extends('master')
@section('content')

<div class="col-xs-12 col-sm-12 col-md-12"><br>
  
<br>

<h4>Specialized Courses</h4>

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
        @foreach($scriteria as $scriteri)                                                                              
        <tr>
                <td>{{$scriteri->id}}</td>
              
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