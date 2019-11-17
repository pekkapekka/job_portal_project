<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

</head>
<body>
	<h1 class="text-center text-success">Candidate Page</h1>
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
			        		<th>Jobtype</th>
			        		<th>Address</th>
			        		<th>PhoneNo</th>
			        		<th>Education</th>
			        		<th>Age</th>
							<th>GenderId</th>
							<th>Photo</th>
							<th colspan="2">Action</th>


			        	</thead>
			        	<tbody>
			        		@foreach($candidates as $row)
			                  <tr>
			                  	<td>{{$row->jobtype->name}}</td>
			                  	<td>{{$row->address}}</td>
			                  	<td>{{$row->phone_no}}</td>
			                  	<td>{{$row->education}}</td>
			                  	
			                  	<td>{{$row->age}}</td>
			                  	
			                  	<td>{{$row->gender->name}}</td>
			                  	
			                  	<td><img src="{{asset($row->photo)}}" class="img-fluid rounded" width="100px" height="100px"></td>

	                  			<td><a href="{{route('candidates.edit',$row->id)}}" class="btn btn-warning">Edit</a></td>

	                  			
			                    <td><form method="post" action="{{route ('candidates.destroy',$row->id)}}">
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
    
  
