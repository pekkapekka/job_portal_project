<!DOCTYPE html>
<html>
<head>
  <title>Detail Form</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
 
  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

</head>
<body>

    
   


<!-- Page Content -->
  <div class="container mt-5">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{$post->user->name}}</a>
        </p>

        <hr>
          <form method="post" action="">

            
         
         <p>Posted on {{$post->created_at->toDayDateTimeString()}}
        <!-- Date/Time -->
        
          
           
          @if(Auth::check() && Auth::id() ==$post->user->id)
        
        <!-- delete ko form nat yae -->
      
          @csrf
          @method('DELETE')
          
          <input type="submit" class="btn btn-danger float-right ml-1" value="Delete">
          <a href="#" class="float-right btn btn-warning ml-2">Edit</a>
          @endif

          @hasrole('admin')
          @csrf
          @method('DELETE')
          
          <input type="submit" class="btn btn-danger float-right ml-1" value="Delete">
          <a href="#" class="float-right btn btn-warning ml-2">Edit</a>
          @endhasrole

          @hasrole('user')
          <a href="#" class="float-right btn btn-dark ml-2">Send CV</a>
          @endhasrole
          
        </form>
        


        <!-- <span>{{$post->category->name}}</span>  -->     <!-- category table htal ka htwat -->
       
        </p>
      

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset($post->image)}}" alt="">
        

        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <hr>

   

      </div>

      <!-- Sidebar Widgets Column -->
      

    </div>
    <!-- /.row -->

  </div>
</body>
</html>