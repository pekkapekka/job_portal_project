<!DOCTYPE html>
<html lang="en">
<head>
      <title>Table V02</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->      
      <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
      
      <div class="limiter">
      @if(isset($details))      
            <div class="container-table100">
                  <div class="wrap-table100">
                        <p align="center"> The Search results for your <b> {{ $query }} </b> are :</p>
                        <h2 align="center">Jobs</h2>
                              <div class="table">
                                    <div class="row header">
                                          <div class="cell">
                                                Title
                                          </div>
                                          <div class="cell">
                                                Name
                                          </div>
                                          <div class="cell">
                                                Category
                                          </div>
                                          <div class="cell">
                                                Location
                                          </div>
                                          <!-- <div class="cell">
                                                Description
                                          </div> -->
                                          <div class="cell">
                                                
                                          </div>
                                          <div class="cell">
                                                Show Detail
                                          </div>
                                    </div>

                              @foreach($details as $job)
                                    <div class="row">
                                          <div class="cell" data-title="">
                                                {{$job->title}}
                                          </div>
                                          <div class="cell" data-title="">
                                                {{$job->name}}
                                          </div>
                                          <div class="cell" data-title="">
                                                {{$job->category->category_name}}
                                          </div>
                                          <div class="cell" data-title="">
                                                {{$job->location->location_name}}
                                          </div>
                                          <!-- <div class="cell" data-title="">
                                                {{$job->description}}
                                          </div> -->
                                          <div class="cell" data-title="">
                                                <img src="{{$job->image}}" width="150px" />
                                          </div>
                                          <div class="cell" data-title="">
                                                <input type="submit" class="btn btn-primary" value="Detail"/>
                                          </div>
                                    </div>
                              @endforeach
                              </div>
                  </div>
            </div>
            @endif
      </div>


      

<!--===============================================================================================-->      
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
      <script src="vendor/bootstrap/js/popper.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
      <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
      <script src="js/main.js"></script>

</body>
</html>