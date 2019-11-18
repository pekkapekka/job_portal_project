<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">


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

</head>
<body>
	<h1 class="text-center text-success">Jobs Page</h1>
	 	<div class="container">
			      <div class="row my-3">
			        <div class="col-md-6 offset-1">
			          @if ($errors->any())
			        <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			       </div>
			       @endif
			        
			        
			          
			        <table border="1" cellspacing="0" cellpadding="20" class="table-hover">
			        	<thead>
			        		<th>Title</th>
			        		<th>Category</th>
			        		<th>Location</th>
			        		<th>Description</th>
			        		<th>Salary</th>
							<th>Photo</th>
							<th>User</th>
							<th colspan="2">Action</th>
			        	</thead>
			        	<tbody>
			        		@foreach($jobs as $row)
			                  <tr>
			                  	<td>{{$row->title}}</td>
			                  	<td>{{$row->category->category_name}}</td>
			                  	<td>{{$row->location->location_name}}</td>
			                  	<td>{{$row->description}}</td>
			                  	
			                  	<td>{{$row->salary}}</td>
			                  	
			                  	<td><img src="{{asset($row->image)}}" class="img-fluid rounded" width="100px" height="100px"></td>

			                  	<td>{{$row->user->name}}</td>
			                  	
			                  	
	                  			<td><a href="{{route('jobs.edit',$row->id)}}" class="btn btn-warning">Edit</a></td>

	                  			
			                    <td><form method="post" action="{{route('jobs.destroy',$row->id)}}">
			                    @csrf
			                    @method('DELETE')
			                  
			                  	<input type="submit" class="btn btn-danger" value="Delete"  onclick="return confirm('Are you sure to Delete?')"></td>
			                    </form>
			                  </tr>
			        		@endforeach
			        	</tbody>
			        </table>
			    
			     
			     </div>
			 </div>
    </div>  
<br><br><br><br>
@extends('layout.footer')
</body>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>


</html>
    
  
