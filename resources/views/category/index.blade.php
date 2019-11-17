<!DOCTYPE html>
<html>
<head>
  <title>Category Edit Form</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
 
  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

</head>
<body>
 <h2 class="text-center text-info ">Category Form</h2>

  


     <div class="container">
    <div class="row justify-content-center">
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
        
        
          
       <table border="1" cellspacing="0" cellpadding="20" class="table-striped table-info table-mm-6 table-hover">

          <thead>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <tbody>
            @foreach($category as $row)
                  <tr>
                    <td>{{$row->category_name}}</td>
                    <td><a  href="{{route('category.edit',$row->id)}}" class="btn btn-primary">Edit</a></td>
                    <td><form method="post" action="{{route('category.destroy',$row->id)}}">
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