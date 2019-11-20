<title>JobPortal - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @extends('layout.nav')
    			<br><br><br><br>
		        <!-- Title -->
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
					        	  		<div class="card-header"><h1 class="mt-4" class="text-success">Jobs Create Form</h1></div>
										<div class="card-body">

				        <form method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data">
				        	@csrf
				        	<div class="form-group">
				        		<label>Title</label>
				        		
				        		<input type="text" name="title" class="form-control" placeholder="Enter Title">
				        		
				        	</div>

				        	<div class="form-group">
				        		<label>Company Name:</label>
				        		
				        		<input type="text" name="name" class="form-control" placeholder="Enter Company Name:">
				        		
				        	</div>

				        	<div class="form-group">
				        			<label>Categories</label>
				        		<select name="categories" class="form-control">
						          <option value="">Choose Categories</option>
						          {-- accept data and loop --}
						          @foreach($categories as $row)
						          <option value="{{$row->id}}">{{$row->category_name}}</option>
						          @endforeach
						        </select>
				        		
				        	</div>
				        	<div class="form-group">
				        			<label>Locations</label><select name="locations" class="form-control">
							          <option value="">Choose Locations</option>
							          {-- accept data and loop --}
							          @foreach($locations as $row)
							          <option value="{{$row->id}}">{{$row->location_name}}</option>
							          @endforeach
							        </select>
					        		
				        	</div>
				        	<div class="form-group">
				        		<label>Description</label>
				        		<textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
				        		
				        	
				        	</div>
				        	<div class="form-group">
				        		<label>Salary</label>
				        		<input type="number" name="salary" class="form-control" placeholder="Enter Salary">
				        		
				        	</div>
				        	
				        	<div class="form-group">
				        		<label>Photo</label>
				        		<span class="text-danger">[support file type:jpeg,png,jpg]</span>
				        		<input type="file" name="photo" class="form-control" >
				        		
				        	</div>
				        	

				        	<div class="form-group">
				        			<label>Job Type</label>
				        		<select name="jobtypes" class="form-control">
						          <option value="">Choose Job Type</option>
						          {-- accept data and loop --}
						          @foreach($jobtypes as $row)
						          <option value="{{$row->id}}">{{$row->name}}</option>
						          @endforeach
						        </select>				        		
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
  <br><br><br><br>
@extends('layout.footer')
