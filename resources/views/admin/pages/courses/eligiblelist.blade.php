@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>
    <h1> Bangladesh Navy Eligible Sailors' List</h1>
    <br><br>
    <div id="eligibleCoursePrint">
   <h4>{{$course->shortform}}</h4>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Sailor Name</th>
            <th scope="col">Rank</th>
          </tr>
        </thead>
        <tbody>
            @foreach($sailors as $key=>$person) 
          <tr>
            <th>{{$key+1}}</th>
            <td>{{$person->pullcandidate->first_name}} {{$person->pullcandidate->last_name}}</td>
            <td>{{$person->rankcategory->rank}}</td>
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
  