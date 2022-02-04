@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"> 
<h1>Rank List</h1>
<hr>
<img src="{{url('/uploads/ranks/'.$ranks->rank_image)}}" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />

<p><b>Rank_Name: {{$ranks->rank}}</b></p>
<p><b>Designation: {{$ranks->designation}}</b></p>
</div>
@endsection