 <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4">
                    <div class="card">
                        <center><img class="card-img-top" src="gallery/employee.png" alt="Card image" style="width:50%;height:100px"></center>
                        <div class="card-body text-center">
                          <h4 class="card-title">Employee Login</h4>
                          <form action="adminlogin.php" method="POST">
                            <table style="width: 100%">
                            <tr><td><input type="email" class="form-control mb-4" placeholder="Enter email" id="uname" name="uname"></td></tr>
                            <tr><td><input type="password" class="form-control mb-4" placeholder="Enter password" id="password" name="password"></td></tr>
                          </table>
                          <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                          
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <center>
                        <img class="card-img-top" src="gallery/student1.jpg" alt="Card image" style="width:50%;height: 100px">
                      </center>
                      <div class="card-body text-center">
                        <h4 class="card-title">Student Login</h4>
                        <form action="studentlogin.php" method="post">
                            <table style="width: 100%">
                            <tr><td><input type="text" class="form-control mb-4" placeholder="Enter Roll no" id="uname" name="uname"></td></tr>
                            <tr><td><input type="password" class="form-control mb-4" placeholder="Enter password" id="password" name="password"></td></tr>
                          </table>
                          <a href="#" data-toggle="modal" data-target="#myModal">Register</a>
                          <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>