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
	<h1 class="text-center text-success">Company User Page</h1>
	 	<div class="container">
			      <div class="row my-3">
			        <div class="col-md-6 offset-4">
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
			        		<th>Name</th>
			        		<th>Email</th>
			        		
							<th colspan="2">Action</th>


			        	</thead>
			        	<tbody>
			        		@foreach($company_user as $row)
			                  <tr>
			                  	<td>{{$row->name}}</td>
			                  	<td>{{$row->email}}</td>
			                  	
	                  			<td><a href="{{route('company_user.edit',$row->id)}}" class="btn btn-warning">Edit</a></td>

	                  			
			                    <td><form method="post" action="{{route ('company_user.destroy',$row->id)}}">
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
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<br><br><br><br>
@extends('layout.footer')

</body>
</html>
    
  
