@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
<h1>Rank List</h1>
<hr>
<p><b>Rank_Name: {{$ranks->rank}}</b></p>
<p><b>Designation: {{$ranks->designation}}</b></p>
</div>
@endsection