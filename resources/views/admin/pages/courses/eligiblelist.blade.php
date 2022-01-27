@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12">
 
  <br>
  
    <br><br>
    <div id="eligibleCoursePrint">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="text-align: center;">
          <img style="width:100px;" src="{{url('/logo.png')}}" alt="sailor image">
          <h1> Bangladesh Navy Eligible Sailor's List</h1>

        </div>
        <div class="col-md-4"></div>
      </div>
   <h4> Course Title: {{$course->shortform}}</h4>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Sailor Name</th>
            <th scope="col">Rank</th>
            <th scope="col">Saiolr_Point</th>
            <th scope="col">Course_Point</th>
          </tr>
        </thead>
        <tbody>
            @foreach($sailors as $key=>$person) 
          <tr>
            <th>{{$key+1}}</th>
            <td>{{$person->pullcandidate->first_name}} {{$person->pullcandidate->last_name}}</td>
            <td>{{$person->rankcategory->rank}}</td>
            <td>{{$person->point}}</td>
            @php
                $result = trim($course_point, '[]');
            @endphp
            <td>{{$result}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
    <button class="btn btn-success" type="submit" onClick="PrintDiv('eligibleCoursePrint');" value="Print">Print</button>
   </div>
   
    @endsection

    <script language="javascript">
      function PrintDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
  </script>
  