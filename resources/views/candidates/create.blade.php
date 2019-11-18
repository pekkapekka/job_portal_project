
<!-- <div class="container">

	<div class="row mt-3">
		<div class="col-md-8"> -->
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
<br><br><br><br>
@extends('layout.footer')
    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->




  <!-- /.container -->
