<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

	  <!-- Custom styles for this template -->
	  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
		<h1 class="text-center text-primary">Location Page</h1>
		
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
			        		<th>Location_Name</th>
			        		
							<th colspan="2">Action</th>


			        	</thead>
			        	<tbody>
			        		@foreach($locations as $row)
			                  <tr>
			                  	<td>{{$row->location_name}}</td>
			                  	
	                  			<td><a href="{{route('locations.edit',$row->id)}}" class="btn btn-warning">Edit</a></td>

	                  			
			                    <td><form method="post" action="{{route('locations.destroy',$row->id)}}">
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

</body>
</html>
    
  
