
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
<div class="container">

	<div class="row">
		<div class="col-md-8">

		        <!-- Title -->
		        <h1 class="text-success text-center">Company User Edit Form</h1>
		        @if ($errors->any())
    				<div class="alert alert-danger">
       				 <ul>
            			@foreach ($errors->all() as $error)
            	    	<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    				</div>
				@endif
		       <form method="post" action="{{route('company_user.update',$company_user->id)}}" enctype="multipart/form-data">
		        	@csrf
					@method('PUT')

		        	<div class="form-group">
		        		<label>Name</label>
		        		<input type="text" name="name" class="form-control" value="{{$company_user->name}}">
		        		
		        	</div>
		        	
		        	<div class="form-group">
		        		<label>Email</label>
		        		<input type="emial" name="email" class="form-control" value="{{$company_user->email}}">
		        		
		        		
		        		
		        	</div>
		        	<div class="form-group">
		        		<label>Password</label>
		        		<input type="password" name="password" class="form-control" value="{{$company_user->password}}">
		        		
		        	</div>
		        	
		        	

		        	<div class="form-group">
		            
		            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
		          </div>
		        </form>
		        <!-- Author -->
		        

		</div>


		      <!-- Sidebar Widgets Column -->
	

	</div>
    <!-- /.row -->

</div>


		        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

  <!-- /.container -->

<br><br><br><br>
@extends('layout.footer')