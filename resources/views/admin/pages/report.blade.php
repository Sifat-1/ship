@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
    <div class="container">
        <div id="ReportToPrint">
          <h1>Report</h1>
          <hr>
      
          
          <form action="{{route('show.report')}}" method="GET">
              
              <div class="container" style="display:flex;">
                  <div class="form-group col-4">
                    <label for="fromdate" style="font-size:20px;"><b>From</label></b>
                    <input type="date" class="form-control" id="fromdate" name="fromdate" placeholder="From">
                  </div>
      
                  <div class="form-group col-4">
                      <label for="todate" style="font-size:20px;"><b>To</label></b>
                      <input type="date" class="form-control" id="todate" name="todate" placeholder="To">
                  </div>
      
                  <div class="form-group col-4 mt-4">
                  
                          <button type="submit" class="btn btn-success">Search</button><br><br>
                  </div>
              </div>
              
            
              
            </form>
      
            <div class="container">
          <table class="table table-light" style="width:80%">
              
      
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Sailor Name</th>
                  <th scope="col">sailor Rank</th>
                  <th scope="col">sailor Point</th>
                  
                 
                </tr>
              </thead>
              <tbody>
                @foreach($reports as $key=>$report)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                 
                 
                  <td>{{$report->pullcandidate->first_name}} {{$report->pullcandidate->last_name}}</td>
                  <td>{{$report->rankcategory->rank}}</td>
                  <td>{{$report->point}}</td>
                  
                
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
    
    