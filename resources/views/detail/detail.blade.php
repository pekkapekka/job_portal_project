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
          <h3>{{$post->name}}</h3>

          <h4>Post by {{$post->user->name}}</h4>
          
        </p>

        <hr>
         
          @if(Auth::check() && Auth::id() == $post->user_id) 
         <form method="post" action="">
         <p>Posted on {{$post->created_at->toDayDateTimeString()}}
          @hasrole('employer')
          @csrf
          @method('DELETE')          
          <input type="submit" class="btn btn-danger float-right ml-1" value="Delete">
          <a href="{{route('jobs.edit',$post->id)}}" class="float-right btn btn-warning ml-2">Edit</a>
          @endhasrole

          @hasrole('user')
            <a href="{{route('applicant')}}" class="float-right btn btn-dark ml-2">Applicants</a>
          @endhasrole
          
        </form>
          @endif

          @hasrole('admin')
          @csrf
          @method('DELETE')          
          <input type="submit" class="btn btn-danger float-right ml-1" value="Delete">
          <a href="{{route('jobs.edit',$post->id)}}" class="float-right btn btn-warning ml-2">Edit</a>
          @endhasrole

          
        


        <!-- <span>{{$post->category->name}}</span>  -->     <!-- category table htal ka htwat -->
       
        </p>
      

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{asset($post->image)}}" alt="">
        

        <hr>

        <!-- Post Content -->
        <p class="lead">{{$post->description}}</p>


         @hasrole('user|company_user')
          
          
                    
                    
                  <a href="#exampleModal" data-toggle="modal"  class="btn btn-primary">apply</a>
                    
          @endhasrole

        <blockquote class="blockquote">
          <p class="mb-0"></p>
          <footer class="blockquote-footer">
            <cite title="Source Title"></cite>
          </footer>
        </blockquote>

        <hr>

   

      </div><br>


      <!-- Sidebar Widgets Column -->
      

    </div>
    <!-- /.row -->
    <!-- comment form -->
  <div class="card my-4">
          <h5 class="card-header">Leave a Review:</h5>
          <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger"></div>
            <ul>
              @foreach($error->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
            <form method="post" action="{{route('review')}}">
              @csrf
              <div class="form-group">
                <textarea class="form-control" rows="3" name="content"></textarea>
                <input type="hidden" name="postid" value="{{$post->id}}">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        @php
              $reviews = $post->reviews ;
        @endphp

         @foreach($reviews as $row) 
        <div class="media mb-4">
          <div class="media-body">
            <h5 class="mt-0">{{$row->user->name}}</h5>
            {{$row->body}}
          </div>
        </div>
        @endforeach


      </div>
  </div>
</body>
</html>


<div class="col px-md-5">

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header"><br>
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="post" action="{{route('candidates.store')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="jobid" value="{{$post->id}}">

            <input type="hidden" name="jobtypeid" value="{{$post->jobtype_id}}">
            <div class="form-group">
              <label>Job Type:</label><input type="text" name="jobtype" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
              <label>Address:</label><textarea name="address" class="form-control"></textarea>
            </div>
            <div class="form-group">
             <label>Phone No:</label><input type="text" name="phone_no" class="form-control"><br>            
            </div>
            <div class="form-group">
              <label>Education:</label><input type="text" name="education" class="form-control"><br>            
            </div>
            <div class="form-group">
               <label>Upload photo:</label><input type="file" name="photo" class="form-control"><br>
            </div>
            <div class="form-group">
              <label>Upload CV:</label><input type="file" name="cv" class="form-control"><br>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="submit">
            </div>
         </form>
         </div>
     
    </div>
  </div>

</div>

<br><br><br><br>
@include('layout.footer')
@endsection