
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
		        <h1 class="text-success text-center">Candidate Edit Form</h1>
		        @if ($errors->any())
    				<div class="alert alert-danger">
       				 <ul>
            			@foreach ($errors->all() as $error)
            	    	<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    				</div>
				@endif
		       <form method="post" action="{{route('candidates.update',$candidates->id)}}" enctype="multipart/form-data">
		        	@csrf
					@method('PUT')

		        	<div class="form-group">
					  <label>JobTypes</label><select name="jobtypes" class="form-control">
			          <option value="">Choose JobTypes</option>
			          {-- accept data and loop --}
			          @foreach($jobtypes as $row)
			          <option value="{{$row->id}}"
			            @if($row->id==$candidates->jobtype_id){{'selected'}}
			            @endif]
			            >{{$row->name}}</option>
			          @endforeach
			        </select>
		        		
		        	</div>
		        	<div class="form-group">
		        		<label>Address</label>
		        		<textarea name="address" class="form-control">{{$candidates->address}}</textarea>
		        		
		        		
		        	</div>
		        	<div class="form-group">
		        		<label>PhoneNo:</label>
		        		<input type="text" name="phone_number" class="form-control" value="{{$candidates->phone_no}}">
		        		
		        	</div>
		        	<div class="form-group">
		        		<label>Education</label>
		        		<textarea name="education" class="form-control">
		        			{{$candidates->education}}
		        		</textarea>
		        		
		        	
		        	</div>
		        	<div class="form-group">
		        		<label>Age</label>
		        		<input type="number" name="age" class="form-control" value="{{$candidates->age}}">
		        		
		        	</div>
		        	<div class="form-group">
		        		  <label>MemberTypes</label><select name="genders" class="form-control">
				          <option value="">Choose MemberTypes</option>
				          {-- accept data and loop --}
				          @foreach($genders as $row)
				          <option value="{{$row->id}}"
				            @if($row->id==$candidates->gender_id){{'selected'}}
				            @endif]
				            >{{$row->name}}</option>
				          @endforeach
				        </select>
		        	</div>
		        	<div class="form-group">
		        		<label>Photo</label>
		        		<span class="text-danger">[support file type:jpeg,png,jpg]</span>
		        		<input type="file" name="photo" class="form-control"><br>
		        		
		        		<img src="{{asset($candidates->photo)}}" class="img-fluid" width="100px" height="100px">

		        		<input type="hidden" name="oldphoto" value="{{$candidates->photo}}">
		        		
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