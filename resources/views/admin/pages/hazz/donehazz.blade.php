@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
   
        <div id="ReportToPrint">
          <br><br>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="text-align: center;">
              <img style="width:100px;" src="{{url('/logo.png')}}" alt="sailor image">
          <h4> The Marked Sailors List who have alreay done their HAzz in 2022 </h4>
        </div>
        <div class="col-md-4"></div>
        </div>
          <br><br>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Sailor_Name</th>
                <th scope="col">Sailor_Rank</th>
                <th scope="col">Sailor_Religion</th>
                <th scope="col">Sailor_Age</th>
                <th scope="col">Sailor Obtained_Point</th>
                {{-- <th scope="col">Action</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach($sailors as $key=>$value) 
            <tr>
              <th>{{$key+1}}</th>
              <td>{{$value->pullcandidate->first_name}} {{$value->pullcandidate->last_name}}</td>
              <td>{{$value->rankcategory->rank}}</td>
              <td>{{$value->pullcandidate->religion}}</td>
              <td>{{$value->pullcandidate->age}}</td>
              <td>{{$value->point}}</td>
          
            </tr>
            @endforeach
                 
          
          </tbody>
          </table>
          </div>
          
        
        <button class="btn btn-primary" type="submit" onClick="PrintDiv('ReportToPrint');" value="Print">Print</button>
      
      
      
        
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
    
    