<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

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

</body>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</html>
    
  
