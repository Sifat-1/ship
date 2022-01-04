@extends('master')
@section('content')
<h3>Sailor Profile List</h3>

{{-- <p><b>Rank_Name: {{$ranks->rank}}</b></p> --}}
<div id="SailorProfilePrint">

<p><b>Sailor Name:{{$sailors->name}}</b></p>
<p><b>Sailor rank:{{$sailors->rankcategory->rank}}</b></p>
<p><b>Sailor Address:{{$sailors->address}}</b></p>
<p><b>Sailor Email:{{$sailors->email}}</b></p>
<p><b>Sailor PhoneNumber:{{$sailors->phone}}</b></p>
<p><b>Ship Name:{{$sailors->ship}}</b></p>
</div>
<button class="btn btn-primary" type="submit" onClick="PrintDiv('SailorProfilePrint');" value="Print">Print</button>
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

