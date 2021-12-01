@extends('master')
@section('content')


<form action="{{route('store.candidate')}}" method="POST" enctype="multipart/form-data">
	@csrf

<div class="container">
        <div class="row centered-form">
        <div class="col-md-6 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Admission Form Fill Up</h3><br>
                      {{-- success massege --}}
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

			 			</div>
						 
						 <h4 class="panel-title">Candidate Details:</h4>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<label for="exampleInputName" class="form-label">First Name</label>
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<label for="exampleInputName" class="form-label">Last Name</label>
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
								<label for="exampleInputAddress" class="form-label">Address</label>
			    				<input type="text" name="address" id="exampleInputAddress" class="form-control input-sm" placeholder="Address">
			    			</div>
                            

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
									<label for="exampleInputDate" class="form-label">Birth Date</label>
                                    <input type="date" name="date" id="exampleInputDate" class="form-control input-sm" placeholder="Birth Date">
                                </div>
                            </div>
						
                            </div>
							<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<label for="exampleInputNationality" class="form-label">Nationality</label>
			                <input type="text" name="nationality" id="exampleInputNationality" class="form-control input-sm" placeholder="Nationality">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<label for="exampleInputBlood" class="form-label">Blood Group</label>
			    						<input type="text" name="bloodgroup" id="exampleInputBlood" class="form-control input-sm" placeholder="Blood Group">
			    					</div>
			    				</div>
			    			</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<label for="exampleInputNumber" class="form-label">Phone Number</label>
										<input type="number" name="phone" id="exampleInputNumber" class="form-control input-sm" placeholder="Phone number">
									</div>
								</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<label for="exampleInputReligion" class="form-label">Religion</label>
			    						<input type="text" name="religion" id="exampleInputReligion" class="form-control input-sm" placeholder="Religion">
			    					</div>
			    				</div>
			    			</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
									<label for="exampleInputEmail" class="form-label">Email</label>
                                    <input type="text" name="email" id="exampleInputEmail" class="form-control input-sm" placeholder="Email">
                                </div>
                            </div>

							{{-- <div class="col-xs-6 col-sm-6 col-md-12">
								<label for="Select" class="form-select">Educational Qualifications</label>
								<input type="text" name="education" id="Select" class="form-control input-sm" placeholder="educational qualification">
					
							  </div> --}}
						  

							  <div class="col-xs-6 col-sm-6 col-md-12">
							  <div class="form-group">
								<label for="exampleInputImage" class="form-label">Candidate Image</label>
			    				<input type="file" name="candidate_image" id="exampleInputImage" class="form-control input-sm" placeholder="image">
			    			  </div>
						       </div>
							   <h4 class="panel-title">Parents Details:</h4>
							   <div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<label for="exampleInputName" class="form-label">Father Name</label>
			                <input type="text" name="fathername" id="exampleInputName" class="form-control input-sm" placeholder="Father Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<label for="exampleInputName" class="form-label">Mother Name</label>
			    						<input type="text" name="mothername" id="exampleInputName" class="form-control input-sm" placeholder="Mother Name">
			    					</div>
			    				</div>
			    			</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
									<label for="exampleInputJob" class="form-label">Father's Occupation</label>
                                    <input type="text" name="foccupation" id="exampleInputJob" class="form-control input-sm" placeholder="Occupation">
                                </div>
                            </div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<div class="form-group">
									<label for="exampleInputJob" class="form-label">Mother's Occupation</label>
                                    <input type="text" name="moccupation" id="exampleInputJob" class="form-control input-sm" placeholder="Occupation">
                                </div>
                            </div>
							<!DOCTYPE html>


			    			
			    			<input type="submit" value="submit" class="btn btn-success">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
</form>

    
    @endsection()


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