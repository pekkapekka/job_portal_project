 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
 <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
<div class="container">

	<div class="row">
		<div class="col-md-8">

		        <!-- Title -->
		        <h1 class="text-align-center">Locations Edit Form</h1>
		        @if ($errors->any())
    				<div class="alert alert-danger">
       				 <ul>
            			@foreach ($errors->all() as $error)
            	    	<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    				</div>
				@endif
		       <form method="post" action="{{route('locations.update',$locations->id)}}" enctype="multipart/form-data">
		        	@csrf
					@method('PUT')
		        	<div class="form-group">
		        		<label>Location_Name</label>
		        		<input type="text" name="location_name" class="form-control" value="{{$locations->location_name}}">
		        		
		        	</div>
		        	<div class="form-group">
		            
		            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
		          </div>
		        </form>
		        <!-- Author -->
		        

		</div>
	</div>
   
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

 
