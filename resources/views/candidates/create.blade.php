
<!-- <div class="container">

	<div class="row mt-3">
		<div class="col-md-8"> -->

				 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

			  <!-- Custom styles for this template -->
			  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

		        
			        @if ($errors->any())
	    				<div class="alert alert-danger">
	       				 <ul>
	            			@foreach ($errors->all() as $error)
	            	    	<li>{{ $error }}</li>
	            			@endforeach
	        			</ul>
	    				</div>
					@endif

					<div class="container">
					    <div class="row justify-content-center">
					        <div class="col-md-8">
					        	  <div class="card">
					        	  		<div class="card-header"><h1 class="mt-4" class="text-success">Candidates Create Form</h1></div>
										<div class="card-body">
		        <!-- Title -->

				        <form method="post" action="{{route('candidates.store')}}" enctype="multipart/form-data">
				        	@csrf
				        	<div class="form-group">
				        		
				        		<label>Jobtypes</label><select name="jobtypes" class="form-control">
						          <option value="">Choose jobtypes</option>
						          {-- accept data and loop --}
						          @foreach($jobtypes as $row)
						          <option value="{{$row->id}}">{{$row->name}}</option>
						          @endforeach
						        </select>
				        		
				        	</div>
				        	
				        	<div class="form-group">
				        		<label>Address</label>
				        		<textarea name="address" class="form-control"  placeholder="Enter Address"></textarea>
				        	</div>
				        	<div class="form-group">
				        		<label>PhoneNo:</label>
				        		<input type="text" name="phone_number" class="form-control" placeholder="Enter Phone No">
				        		
				        	</div>
				        	<div class="form-group">
				        		<label>Education</label>
				        		<textarea name="education" class="form-control"  placeholder="Enter Education"></textarea>
				        		
				        	
				        	</div>
				        	<div class="form-group">
				        		<label>Age</label>
				        		<input type="number" name="age" class="form-control"  placeholder="Enter Age">
				        		
				        	</div>
				        	<div class="form-group">
				        		<label>Gender</label><select name="genders" class="form-control">
						          <option value="">Choose Genders</option>
						          {-- accept data and loop --}
						          @foreach($genders as $row)
						          <option value="{{$row->id}}">{{$row->name}}</option>
						          @endforeach
						        </select>
				        		
				        	</div>
				        	<div class="form-group">
				        		<label>Photo</label>
				        		<span class="text-danger">[support file type:jpeg,png,jpg]</span>
				        		<input type="file" name="photo" class="form-control">
				        		
				        	</div>

				        	<div class="form-group">
				            
				            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
				          </div>
				        </form>
				    </div>
				</div>
		  </div>
		</div>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

  <!-- /.container -->
