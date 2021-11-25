@extends('master')
@section('content')

<div class="container">
        <div class="row centered-form">
        <div class="col-md-6 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Admission Form Fill Up</h3><br>
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
                                    <input type="number" name="age" id="age" class="form-control input-sm" placeholder="Age">
                                </div>
                            </div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Product Image</label>
								<input  type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-success">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>


    
    @endsection()