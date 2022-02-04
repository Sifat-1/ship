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
      @foreach($special_courses as $key=>$course)                                                                              
      <tr>
              <th>{{$key+1}}</th>
             <td>{{$course->shortform}}</td>
             <td>{{$course->details}}</td>
             <td>
              <a href="{{route('create.scriteria',$course->id)}}" class="btn btn-primary">Add Criteria</a>
              <a href="{{route('show.scriteria')}}" class="btn btn-info">View Criteria</a>
              {{-- @if($course->cgpa > 3)
              <a href="/ShowsCriteria" class="btn btn-info">View Criteria</a>
              @endif --}}
             </td>
                   
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
        
    



@endsection