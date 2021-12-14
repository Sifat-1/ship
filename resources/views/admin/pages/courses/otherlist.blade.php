@extends('master')
@section('content')

<div class="col-xs-12 col-sm-12 col-md-12"><br>
  
<br>

<h4>Others Courses</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Course Short_Form</th>
        <th scope="col">Course Full_Name</th>
        
      
        
      </tr>
    </thead>
    <tbody>
      @foreach($other_courses as $course)                                                                              
    <tr>
            <th>{{$course->id}}</th>
           <td>{{$course->shortform}}</td>
           <td>{{$course->details}}</td>
           
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
        
    



@endsection