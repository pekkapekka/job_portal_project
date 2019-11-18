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



<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
 
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
                <div class="card-header"><h1 class="mt-4">Category Edit Form</h1></div>
                <div class="card-body">
		       <form method="post" action="{{route('company.update',$company->id)}}" enctype="multipart/form-data">
		        	@csrf
					@method('PUT')
		        	<div class="form-group">
		        		<label>Enter Company Name:</label>
		        		<input type="text" name="name" class="form-control" value="{{$company->name}}">
		        		
		        	</div>
					<div class="form-group">
					  <label>User Name:</label><select name="users" class="form-control">
			          <option value="">Choose User Name:</option>
			          {-- accept data and loop --}
			          @foreach($users as $row)
			          <option value="{{$row->id}}"
			            @if($row->id==$company->user_id){{'selected'}}
			            @endif
			            >{{$row->name}}</option>
			          @endforeach
			        </select>		        		
		        	</div>

		        	 <div class="form-group">
					  <label>Location:</label><select name="locations" class="form-control">
			          <option value="">Location name:</option>
			          {-- accept data and loop --}
			          @foreach($locations as $row)
			          <option value="{{$row->id}}"
			            @if($row->id==$company->location_id){{'selected'}}
			            @endif
			            >{{$row->location_name}}</option>
			          @endforeach
			        </select>		        		
		        	</div>

		        	<div class="form-group">
		        		<label>Address</label>
		        		<textarea name="address" class="form-control">{{$company->address}}</textarea>
		        		
		        		
		        	</div>
		        	<div class="form-group">
		        		<label>PhoneNo:</label>
		        		<input type="text" name="phone_number" class="form-control" value="{{$company->phone_number}}">
		        		
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
</div>
</div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <!-- /.container -->
<br><br><br><br>
@extends('layout.footer')
