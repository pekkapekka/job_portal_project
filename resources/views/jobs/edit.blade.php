 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

			  <!-- Custom styles for this template -->
 <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
<div class="container">

	<div class="row">
		<div class="col-md-8">

		        <!-- Title -->
		        <h1 class="mt-4">Jobs Edit Form</h1>
		        @if ($errors->any())
    				<div class="alert alert-danger">
       				 <ul>
            			@foreach ($errors->all() as $error)
            	    	<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    				</div>
				@endif
		       <form method="post" action="{{route('jobs.update',$jobs->id)}}" enctype="multipart/form-data">
		        	@csrf
					@method('PUT')
		        	<div class="form-group">
		        		<label>Title</label>
		        		<input type="text" name="title" class="form-control" value="{{$jobs->title}}">
		        		
		        	</div>
		        	<div class="form-group">
		        		 <label>Category</label><select name="category" class="form-control">
					          <option value="">Choose Category</option>
					          {-- accept data and loop --}
					          @foreach($categories as $row)
					          <option value="{{$row->id}}"
					            @if($row->id == $jobs->category_id){{'selected'}}
					            @endif
					            >{{$row->category_name}}</option>
					          @endforeach
					        </select><br>	        		
		        	</div>
		        	<div class="form-group">
		        		 <label>Locations</label><select name="locations" class="form-control">
				          <option value="">Choose Locations</option>
				          {-- accept data and loop --}
				          @foreach($locations as $row)
				          <option value="{{$row->id}}"
				            @if($row->id==$jobs->location_id){{'selected'}}
				            @endif
				            >{{$row->location_name}}</option>
				          @endforeach
				        </select>
		        		
		        	</div>
		        	<div class="form-group">
		        		<label>Description</label>
		        		<textarea name="description" class="form-control">
		        			{{$jobs->description}}
		        		</textarea>
		        		
		        	
		        	</div>
		        	<div class="form-group">
		        		<label>Salary</label>
		        		<input type="number" name="salary" class="form-control" value="{{$jobs->salary}}">
		        		
		        	</div>
		        	
		        	<div class="form-group">
		        		<label>Photo</label>
		        		<span class="text-danger">[support file type:jpeg,png,jpg]</span>
		        		<input type="file" name="photo" class="form-control">
		        		
		        		<img src="{{asset($jobs->image)}}" class="img-fluid" width="100px" height="100px">

		        		<input type="hidden" name="oldphoto" value="{{$jobs->photo}}">
		        		
		        	</div>
		        	<div class="form-group">
		        		 <label>Users</label><select name="users" class="form-control">
			          <option value="">Choose Users</option>
			          {-- accept data and loop --}
			          @foreach($users as $row)
			          <option value="{{$row->id}}"
			            @if($row->id==$jobs->user_id){{'selected'}}
			            @endif]
			            >{{$row->name}}</option>
			          @endforeach
			        </select>
		        		
		        	</div>
		       	<div class="form-group">
		            
		            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
		            <input type="submit" class="btn btn-warning" value="Apply Job"  onclick="return confirm('Are you sure to apply this job?')">
		          </div>
		        </form>
		        <!-- Author -->
		        

		</div>

		        

		      <!-- Sidebar Widgets Column -->
	    <div class="col-md-4">

	        <!-- Search Widget -->
	        <div class="card my-4">
	          <h5 class="card-header">Search</h5>
	          <div class="card-body">
	            <div class="input-group">
	              <input type="text" class="form-control" placeholder="Search for...">
	              <span class="input-group-btn">
	                <button class="btn btn-secondary" type="button">Go!</button>
	              </span>
	            </div>
	          </div>
	        </div>

	        <!-- Categories Widget -->
	        <div class="card my-4">
	          <h5 class="card-header">Categories</h5>
	          <div class="card-body">
	            <div class="row">
	              <div class="col-lg-6">
	                <ul class="list-unstyled mb-0">
	                  <li>
	                    <a href="#">Web Design</a>
	                  </li>
	                  <li>
	                    <a href="#">HTML</a>
	                  </li>
	                  <li>
	                    <a href="#">Freebies</a>
	                  </li>
	                </ul>
	              </div>
	              <div class="col-lg-6">
	                <ul class="list-unstyled mb-0">
	                  <li>
	                    <a href="#">JavaScript</a>
	                  </li>
	                  <li>
	                    <a href="#">CSS</a>
	                  </li>
	                  <li>
	                    <a href="#">Tutorials</a>
	                  </li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>

	        <!-- Side Widget -->
	        <div class="card my-4">
	          <h5 class="card-header">Side Widget</h5>
	          <div class="card-body">
	            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
	          </div>
	        </div>

	    </div>


	</div>
    <!-- /.row -->

</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

  <!-- /.container -->

