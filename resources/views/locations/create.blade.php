

 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

			  
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
					        	  		<div class="card-header"><h1 class="mt-4" class="text-success">Locations Create Form</h1></div>
										<div class="card-body">

				        <form method="post" action="{{route('locations.store')}}" enctype="multipart/form-data">
				        	@csrf
				        	<div class="form-group">
				        		<label>Location_Name</label>
				        		<input type="text" name="location_name" class="form-control">
				        		
				        	</div>
				        	
				        	<div class="form-group">
				            
				            <input type="submit" name="btnsubmit" class="btn btn-success" value="Save">
				          </div>
				        </form>
				    </div>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

  <!-- /.container -->
