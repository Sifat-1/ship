@extends('website.master')
@section('content')
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form  action="{{route('store.candidate')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<h3 class="panel-title">Admission Form Fill Up</h3><br>
			  {{-- success massege  --}}
                        @if(session()->has('success'))
                        <p class="alet alert-success">
                            {{session()->get ('success')}}
                        </p>
                        @endif <br>

                        {{-- validation --}}
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
			<div class="form-group">
			  <label for="exampleFormControlInputFname">First Name</label>
			  <input name=first_name type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter First Name">
			</div>
			<div class="form-group">
				<label for="exampleFormControlInputLname">Last Name</label>
				<input name=last_name type="text" class="form-control" id="exampleFormControlInputLname" placeholder="enter Last Name">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputaddress">Address</label>
				<input name=address type="text" class="form-control" id="exampleFormControlInputaddress" placeholder="enter Address">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputDate">Date</label>
				<input name=date type="date" class="form-control" id="exampleFormControlInputdate" placeholder="enter Date">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputDate">Nationality</label>
				<input name=nationality type="text" class="form-control" id="exampleFormControlInputnationality" placeholder="enter nationality">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputbloodgroup">Bloodgroup</label>
				<input name=bloodgroup type="textt" class="form-control" id="exampleFormControlInputbloodgroup" placeholder="enter bloodgroup">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputPhone">Phone</label>
				<input name=phone type="number" class="form-control" id="exampleFormControlInputphone" placeholder="enter phone number">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputDate">Religion</label>
				<input name=religion type="text" class="form-control" id="exampleFormControlInputreligion" placeholder="enter religion">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputDate">Father Name</label>
				<input name=fathername type="text" class="form-control" id="exampleFormControlInputfathername" placeholder="enter Father Name">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputmothername">Mother Name</label>
				<input name=mothername type="text" class="form-control" id="exampleFormControlInputmothername" placeholder="enter MotherName">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputfoccupation">Father Occupation</label>
				<input name=foccupation type="text" class="form-control" id="exampleFormControlInputfoccupation" placeholder="enter father occupation">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputmoccupation">Mother Occupation</label>
				<input name=moccupationl type="text" class="form-control" id="exampleFormControlInputmoccupation" placeholder="enter mother occupation">
			  </div>
			  <div class="form-group">
				<label for="exampleFormControlInputmail">Email</label>
				<input name=email type="text" class="form-control" id="exampleFormControlInputmail" placeholder="enter email">
			  </div>


	        <div class="form-group">
				<label for="exampleFormControlInputFile">File</label>
				<input name="candidate_image" type="file" class="form-control" id="exampleFormControlInputFile" placeholder="name@example.com">
			  </div>
			
			<button type="submit" class="btn btn-success">Submit</button>
		  </form>
	</div>
	<div class="col-sm-2"></div>
</div>




@endsection()




















{{-- <div class="form-group">
			  <label for="exampleFormControlSelect1">Example select</label>
			  <select class="form-control" id="exampleFormControlSelect1">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			  </select>
			</div>
			<div class="form-group">
			  <label for="exampleFormControlSelect2">Example multiple select</label>
			  <select multiple class="form-control" id="exampleFormControlSelect2">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			  </select>
			</div> --}}
			{{-- <div class="form-group">
			  <label for="exampleFormControlTextarea1">Example textarea</label>
			  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div> --}}
{{-- <form action="{{route('store.candidate')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container">
        <div class="row centered-form">
            <div class="col-md-6 col-sm-6 col-md-6 col-sm-offset-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admission Form Fill Up</h3><br>
                        {{-- success massege 
                        @if(session()->has('success'))
                        <p class="alet alert-success">
                            {{session()->get ('success')}}
                        </p>
                        @endif <br>

                        {{-- validation
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                    </div>

                    <h4 class="panel-title">Candidate Details:</h4>
                    <div class="panel-body">
                        <form role="form">
                            

</form>
</div>
</div>
</div>
</div>
</div>
</form> --}}



























{{-- <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="date" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    		 --}}
