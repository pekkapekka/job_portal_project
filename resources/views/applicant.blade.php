<!DOCTYPE html>
<html>
<head>
  <title>Category Edit Form</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
 
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
 <h2 class="text-center text-info ">Applicants Form</h2>

  


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
            <th>Company</th>
            <th>Description</th>
            <th>Job</th>
            <th>View Profile</th>
            <th>Mail Here</th>
          </thead>
          <tbody>
            @foreach($applicants as $row)
                  <tr>
                    <td>{{$row->company->name}}</td>
                    <td>{{$row->job->title}}</td>
                    <td>{{$row->job->description}}</td>
                    <td><a href="{{route('candidates.edit',$row->candidate_id)}}" class="btn btn-primary">Visit</a>
                    <td><a href="{{route('mail',$row->candidate_id)}}" class="btn btn-success">Mail Here</a>
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