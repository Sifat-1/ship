@extends('master')
@section('content')

<h3> Showing SailorRank List </h3>
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 12px 17px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 22px 8px;
  width:11%;
  cursor: pointer;
}

/* .button1 {background-color: #4CAF50;} Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>
<body>


{{-- <button class="button button1">Green</button> --}}
{{-- link --}}

<a href="/CtreatRank" class="button button2">Creat Rank</a>

</body>
</html>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Rank_Name</th>
        <th scope="col">Designation</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach($ranks as $value) 
      <tr>
        <th>{{$value->id}}</th>
        <td>{{$value->rank}}</td>
        <td>{{$value->designation}}</td>
       
 </tr>
        
 @endforeach
    </tbody>
  </table>


@endsection
