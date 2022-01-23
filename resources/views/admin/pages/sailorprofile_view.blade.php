@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>
<h3>Sailor Profile Details</h3>


{{-- <p><b>Rank_Name: {{$ranks->rank}}</b></p> --}}
<div id="SailorProfilePrint">
<img src="{{url('/uploads/candidates/'.$sailors->pullcandidate->image)}}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
<p><b>Sailor Name:{{$sailors->pullcandidate->first_name}} {{$sailors->pullcandidate->last_name}}</b></p>
<p><b>Sailor rank:{{$sailors->rankcategory->rank}}</b></p>
<p><b>Ship Name:{{$sailors->shipcategory->name}}</b></p>
<p><b>Sailor Email:{{$sailors->pullcandidate->email}}</b></p>
<p><b>Sailor Point:{{$sailors->point}}</b></p>
{{-- <p><b>Sailor Result_Point:{{$sailors->point}}</b></p> --}}
</div>
<button class="btn btn-primary" type="submit" onClick="PrintDiv('SailorProfilePrint');" value="Print">Print</button>
<br><br>
<a class="btn btn-success" type="button" href="{{route('edit.sailorrank',$sailors->id)}}" >Update Rank</a>
<br><br>
<h4>Rank History</h4>

<table class="table table-striped">

    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Previous Rank</th>
        <th scope="col">Holding Rank</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($sailors->ranks as $key=>$rank)  
        
      <tr>
        <th>{{$key}}</th>
        <td>{{$rank->fromrank ? $rank->fromrank->rank : '-'}}</td>
        
        <td>{{$rank->torank ? $rank->torank->rank : '-'}}</td>

        
      </tr>
      @endforeach
    </tbody>

  </table>
  <br><br>
  <a class="btn btn-warning" type="button" href="{{route('add.point',$sailors->id)}}" >Add Result</a>
  <br><br>
   <h4>Result Status</h4>

<table class="table table-striped">

    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Course Name</th>
        <th scope="col">Course Point</th>
      </tr>
    </thead>
    <tbody>
        @foreach($results as $key=>$result)  
        
      <tr>
        <th>{{$key+1}}</th>
        <td>{{$result->addingcoursename->shortform}}</td>
        <td>{{$result->point}}</td>
        
    

        
      </tr>
      @endforeach
    </tbody>

  </table> 
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

