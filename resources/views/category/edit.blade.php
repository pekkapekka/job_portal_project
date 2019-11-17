
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
    <form method="post" action="{{route('category.update',$category->id)}}">
      @csrf
      @method('PUT')
  <div class="form-group">
    <label>Category_Name:</label>
    <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}">
  </div>
  <div class="form-group">
    
    <input type="submit" name="update" class="btn btn-dark" value="Update">
  </div>

</form>
 
            </div>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
       
  
