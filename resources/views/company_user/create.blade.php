
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
					        	  		<div class="card-header"><h1 class="mt-4" class="text-success">Company User Create Form</h1></div>
										<div class="card-body">
		        <!-- Title -->

				        <form method="post" action="{{route('company_user.store')}}" enctype="multipart/form-data">
				        	@csrf
				        
				        	<div class="form-group">
				        	<label>Name</label>
				        	<input type="text" name="name" class="form-control" placeholder="Enter Name">
				        	</div>
				        	<div class="form-group">
				        		<label>Email</label>
				        		<input type="email" name="email" class="form-control" placeholder="Enter Email">
				        	</div>
				        	<div class="form-group">
				        		<label>PhoneNo:</label>
				        		<input type="text" name="phone_number" class="form-control" placeholder="Enter Phone No">
				        		
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
