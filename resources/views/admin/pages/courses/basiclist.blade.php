@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>

{{-- <div class="col-xs-12 col-sm-12 col-md-12"><br>
  <a href="/CreatBasic" button type="submit" class="btn btn-success">Creat New Course</button> </a>
<br> --}}

<h4>Basic Courses</h4>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Course Short_Form</th>
        <th scope="col">Course Full_Name</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($basic_courses as $course)                                                                              
    <tr>
            <th>{{$course->id}}</th>
           <td>{{$course->shortform}}</td>
           <td>{{$course->details}}</td>
           <td>
             {{-- to duplicate line use alt+shift+down arrow --}}
             <a href="{{route('create.bcriteria',$course->id)}}" class="btn btn-primary">Add Criteria</a>
             <a href="{{route('show.bcriteria')}}" class="btn btn-info">View Criteria</a>
   
             
             
           </td>
             
    </tr>
    @endforeach
    </tbody>
  </table>
</div>

        
    



@endsection