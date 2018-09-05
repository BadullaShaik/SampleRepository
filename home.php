<!DOCTYPE html>
<html lang="en">
<head>
  <title>JNTUACEP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script  src="angularjs/angular.js"></script>
  <script type="text/javascript">
          $(document).ready(function(){
            $("#content").load("loginpage.php");    
          });
  </script>
  <script>
            function CountryController($scope) {
                $scope.countries = {
                    'M.Tech': {
                        'I Year': ['CSE', 'ECE', 'EEE', 'CVIL'],
                        'II Year': ['CSE', 'ECE', 'EEE', 'CVIL'],  
                    },
                    'B.Tech': {
                      'I Year': ['CSE', 'ECE', 'EEE', 'CVIL'],
                        'II Year':['CSE', 'ECE', 'EEE', 'CVIL'],
                        'III Year': ['CSE', 'ECE', 'EEE', 'CVIL'],
                        'IV Year': ['CSE', 'ECE', 'EEE', 'CVIL'],
                    }
                };
            }
        </script>
        
</head>
<body>
 
      <div class="container" style="padding-top: 10px">
        <div class="card">
            <div class="card-header">
                <center>
                  <img src="gallery/title_head.jpg">
                  <img src="gallery/body.jpg">
                </center>
            </div> 
            <div class="card-body text-center">
                <div id="content"></div>   
             </div>
            
            <div class="card-footer text-center"><i style="color: blue">Copy right@ All rights reserved by Shaik Badulla </i></div>
          </div>
        </div>
</body>
</html>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header btn-primary">
          <h4 class="modal-title">Register Here</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="register.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="sname">Student Name:</label>
                <input type="text" class="form-control" id="sname" name="sname" placeholder="Enter Full Name" pattern="[A-Za-z ]{4,}" required title="Name does not allows numbers">
              
            </div>
            <div class="form-group">
              <label for="rollno">Roll No:</label>
              
                <input type="text" class="form-control" id="rollno" name="rollno" placeholder="Enter Roll No" pattern="[A-Za-z0-9]{10}" required>
              
            </div>
             <div ng-app ng-controller="CountryController">
                  <div class="form-group">
                    <label for="Country">Course:</label>
                    
                    <select class="form-control" id="course" name="course" ng-model="states" ng-options="course for (course, states) in countries">
                    <option value=''>Select</option>
                    </select>
                  
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="States">Year:</label>
                    <div class="col-sm-8">
                    <select class="form-control" id="year" name="year" ng-disabled="!states" ng-model="cities" ng-options="year for (year,city) in states">
                    <option value=''>Select</option>
                    </select>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="City">Branch:</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="branch" name="branch">
                  <option>Cse</option>
                  <option>Ece</option>
                  <option>Eee</option>
                  <option>Civil</option>
                  <option>Mech</option>
                </select>
                  </div>
                  </div>
              </div>
            <div class="form-group">
              <label for="email">Email:</label>
              
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
                       
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              
            </div>
            
            <div class="form-group">
              <label for="cpwd">Confirm Password:</label>
                       
                <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Enter Confirm password" required>
              
            </div>
            
            <div class="form-group">
              <label for="cpwd">Phone Number:</label>
                        
                <input type="text" class="form-control" id="phno" name="phno" placeholder="Enter Phone number" pattern="[0-9]{10}" title="It alloes numbers only" required>
              
            </div>
            
            <div class="form-group">
              <label for="image">Upload Image:</lable>      
                <input type="file" class="form-control" id="image" name="image" required> 
            </div>
            
            <div class="form-group">        
              <div class="text-center">
                <input type="submit" name="register" value="Register" class="btn btn-primary pull-right">
              </div>
            </div>
          </form>
        </div>    
      </div>
    </div>
  </div>