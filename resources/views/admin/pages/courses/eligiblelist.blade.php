@extends('master')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12"><br>
    <h4> Eligible Sailors' List</h4>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
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

      <button class="btn btn-success">
        <i class="fa fa-print"></i>  
        Print</button>
    </div>
    @endsection