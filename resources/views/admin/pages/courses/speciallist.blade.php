@extends('master')
@section('content')

<div class="col-xs-12 col-sm-12 col-md-12"><br>
  
<br>

<h4>Specialized Courses</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Course Shortform</th>
        <th scope="col">Course Full_Name</th>
        <th scope="col">Action</th>
      
        
      </tr>
    </thead>
    <tbody>
      @foreach($special_courses as $course)                                                                              
      <tr>
              <th>{{$course->id}}</th>
             <td>{{$course->shortform}}</td>
             <td>{{$course->details}}</td>
             <td>
              <a href="/CreatsCriteria" class="btn btn-primary">Add Criteria</a>
              <a href="/ShowsCriteria" class="btn btn-info">View Criteria</a>
             </td>
                   
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
        
    



@endsection