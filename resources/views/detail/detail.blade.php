@extends('template')

@include('layout.nav')

@section('content')

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
          <a href="#">{{$post->company_user->name}}</a>
        </p>

        <hr>
          <form method="post" action="">

            
         
         <p>Posted on {{$post->created_at->toDayDateTimeString()}}
        <!-- Date/Time -->
        
          
           
          @if(Auth::check() && Auth::id() == $post->id)
        
        <!-- delete ko form nat yae -->
      
          @csrf
          @method('DELETE')
          
          <input type="submit" class="btn btn-danger float-right ml-1" value="Delete">
          <a href="{{route('jobs.edit',$post->id)}}" class="float-right btn btn-warning ml-2">Edit</a>
          @endif

          @hasrole('admin')
          @csrf
          @method('DELETE')
          
          <input type="submit" class="btn btn-danger float-right ml-1" value="Delete">
          <a href="{{route('jobs.edit',$post->id)}}" class="float-right btn btn-warning ml-2">Edit</a>
          @endhasrole

          @hasrole('user')
          <a href="{{route('sendcv',$post->id)}}" class="float-right btn btn-dark ml-2">Send CV</a>
          @endhasrole

          @hasrole('admin|employer')
            <a href="{{route('applicant')}}" class="float-right btn btn-dark ml-2">Applicants</a>
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
<br><br><br><br>
@include('layout.footer')
@endsection