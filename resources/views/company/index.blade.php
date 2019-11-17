<!DOCTYPE html>
<html>
<head>
	<title>company Form</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
 
  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
</head>
<body>
  <h2 class="text-center text-info ">Company Form</h2>

    <div class="container">
		<div class="row my-3">
			<div class="col-md-6 offset-2">
      
			@if ($errors->any())
			<div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			       </div>
			       @endif
			        
			        
			          
<table border="1" cellspacing="0" cellpadding="20" class="table-striped table-info table-mm-6 table-hover">
    	<thead>
        <th>Company Name</th>
    		<th>User</th>
        <th>Location</th>
        
    		<th>Address</th>
    		<th>PhoneNo</th>
    	
			<th colspan="2">Action</th>


    	</thead>
    	<tbody>
    		@foreach($company as $row)
              <tr>
              	<td>{{$row->name}}</td>
                <td>{{$row->user->name}}</td>
                <td>{{$row->location->location_name}}</td>
              	<td>{{$row->address}}</td>
              	<td>{{$row->phone_number}}</td>
            

      			<td><a href="{{route('company.edit',$row->id)}}" class="btn btn-warning">Edit</a></td>

      			
                <td><form method="post" action="{{route('company.destroy',$row->id)}}">
                    @csrf
                    @method('DELETE')
                  
                  	<input type="submit" class="btn btn-danger" value="Delete"></td>
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
    
  
