@extends('master')
@section('content')
<h3>Sailor Profile List</h3>

{{-- <p><b>Rank_Name: {{$ranks->rank}}</b></p> --}}

<p><b>Sailor Name:{{$sailors->name}}</b></p>
<p><b>Sailor rank:{{$sailors->rankcategory->rank}}</b></p>
<p><b>Sailor Address:{{$sailors->address}}</b></p>
<p><b>Sailor Email:{{$sailors->email}}</b></p>
<p><b>Sailor PhoneNumber:{{$sailors->phone}}</b></p>
<p><b>Ship Name:{{$sailors->ship}}</b></p>

    
@endsection
