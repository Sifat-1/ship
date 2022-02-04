@extends('master')
@section('content')
<form action="{{route('store.hazzmonth')}}" method="POST" >
    @csrf
<div class="col-xs-12 col-sm-12 col-md-12"> 
    <div id="doneToPrint">
    
    <br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="text-align: center;">
          <img style="width:100px;" src="{{url('/logo.png')}}" alt="sailor image">
<h4> Showing Eligible Sailor List who will be able to go for Hazz in 2022:</h4>
</div>
<div class="col-md-4"></div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sailor_Name</th>
        <th scope="col">Sailor_Rank</th>
        <th scope="col">Sailor Age</th>
        <th scope="col">Sailor Religion</th>
        <th scope="col">Sailor Obtained_Point</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    @foreach($candidates as $key=>$value) 
   
    <input type="hidden" name="sailor_id[]" value="{{$value->sailor->id}}">
   
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$value->first_name}} {{$value->last_name}}</td>
        <td>{{$value->sailor->rankcategory->rank}}</td>
        <td>{{$value->age}}</td>
        <td>{{$value->religion}}</td>
      
        <td>{{$value->sailor->point}}</td>
        <td>
            <a href="{{route('done.eligiblehazzsailor',$value->sailor->id)}}" class="btn btn-success"> Done</a>
        </td>
        </tr>
   

    

    @endforeach 
      

    
         

</tbody>
</table>

</div>
          
        
<button class="btn btn-primary" type="submit" onClick="PrintDiv('doneToPrint');" value="Print">Print</button>
<br><br>
<h3>Adding Hazz_Month Record</h3>
   
@if(session()->has('success'))
 <p class="alet alert-success">
     {{session()->get ('success')}}
 </p>
 @endif <br>
       
    {{-- <input type="hidden" name="sailor_id" value="{{$sailors->id}}"> --}}

        
    <div class="container" style="display:flex;">
        <div class="form-group col-4">
          <label for="fromdate" style="font-size:20px;"><b>From</label></b>
          <input type="date" class="form-control" id="fromdate" name="fromdate" placeholder="From">
        </div>

        <div class="form-group col-4">
            <label for="todate" style="font-size:20px;"><b>To</label></b>
            <input type="date" class="form-control" id="todate" name="todate" placeholder="To">
        </div>
       
        </div>
        <button type="submit" class="btn btn-success">Ok</button>

    
</div>

<br>
</form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sailor_Name</th>
        <th scope="col">Sailor_Rank</th>
        <th scope="col">Sailor Age</th>
        <th scope="col">Sailor Religion</th>
        <th scope="col">Sailor Point</th>
        <th scope="col">Hazz Starting date</th>
        <th scope="col">Hazz Ending date</th>
        <th scope="col">Year</th>
      
    </tr>
</thead>
<tbody>
    @foreach($hazzlist as $key=>$record) 
   
    {{-- <input type="hidden" name="sailor_id[]" value="{{$record->bringsailor->id}}"> --}}
   
    <tr>
        <th>{{$key+1}}</th>
        <td>{{$record->bringsailor->pullcandidate->first_name}} {{$record->bringsailor->pullcandidate->last_name}}</td>
        <td>{{$record->bringsailor->rankcategory->rank}}</td>
        <td>{{$record->bringsailor->pullcandidate->age}}</td>
        <td>{{$record->bringsailor->pullcandidate->religion}}</td>
        <td>{{$record->bringsailor->point}}</td>
        <td>{{$record->fromdate}}</td>
        <td>{{$record->todate}}</td>
        <td>{{$record->year}}</td>
    
        </tr>
   

    

    @endforeach 
      

    
         

</tbody>
</table>

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

        
        
       
    