<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid bg-dark">
      <div class="container">
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="#"style="color:white">MoeedTech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse">
                data-target="collapsibleNavId" area-control="collapsiblNavId"
                aria-expanded="false" aria-label="Toggle navigation"
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/')}}" style="color:white">Home </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/register')}}" style="color:white">Register</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="{{url('/view')}}" style="color:white">User </a>
                    </li>
              </ul>
          </div>
        </nav>
      </div>  
    </div>  
    <div class=" d-flex justify-content-center"> 
      <form method="post" action="/update/{{$data->id}}" > 
        @csrf
      <h1 align="center">Updation Form</h1>   
        <div  class="form-inline"> 
            <div>
              <div class="form-group">
                  <label for="name"class="control-label col-sm-4"><b>Name</b></label><br>
                  <input type="text"
                  class="form-control" name="name" id="name"value="{{$data->name}}" aria-describedby="helpId" placeholder="Enter Name"><br><br>
                  <span class="text-danger"> @error('name') {{$message}}@enderror </span><br>  
                </div>

                <div class="form-group">
                    <label for="email" class="control-label col-sm-4"><b>Email</b></label><br>
                    <input type="email"
                    class="form-control" name="email" id="email" value="{{$data->email}}" aria-describedby="helpId" placeholder="Enter email"><br>
                    <span class="text-danger"> @error('email') {{$message}}@enderror </span><br>
                </div>

                <div class="form-group">
                    <label for="contact" class="control-label col-sm-4"><b>Contact</b></label><br>
                    <input type="text"
                    class="form-control" name="contact" id="contact" value="{{$data->contact}}" aria-describedby="helpId" placeholder="+92......." ><br>
                    <span class="text-danger"> @error('contact') {{$message}}@enderror </span><br>
                </div>

                <div class="form-group">
                    <label for="country" class="control-label col-sm-4"><b>Country</b></label><br>
                    <input type="text"
                    class="form-control" name="country" id="country" value="{{$data->country}}" aria-describedby="helpId" placeholder="Write your Country"><br>
                    <span class="text-danger"> @error('country') {{$message}}@enderror </span><br>
                </div>
            </div>
            <div>
                  <div class="form-group">
                      <label for="province" class="control-label col-sm-6"><b> Province</b></label><br>
                      <input type="text"
                      class="form-control" name="province" id="province"value="{{$data->province}}" aria-describedby="helpId" placeholder="Write your province" ><br>
                      <span class="text-danger"> @error('province') {{$message}}@enderror </span><br>
                    
                  </div>
                  <div class="form-group">
                      <label for="address" class="control-label col-sm-6"><b>Address</b></label><br>
                      <input type="text"
                      class="form-control" name="address" id="address" value="{{$data->address}}" aria-describedby="helpId" placeholder="Enter your address"><br>
                      <span class="text-danger"> @error('address') {{$message}}@enderror </span><br>
                  </div>

                  <div class="form-group">
                    <label for="password" class="control-label col-sm-6"><b>Password</b></label><br>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"><br>
                    <span class="text-danger"> @error('password') {{$message}}@enderror </span><br>
                  </div>

                  <div class="form-group">
                      <label for="cpassword" class="control-label col-sm-6"><b>ConfirmPassword</b></label><br>
                      <input type="password" class="form-control" name="confirm_password" id="cpassword" placeholder="Again enter password"><br>
                      <span class="text-danger"> @error('cpassword') {{$message}}@enderror </span><br>
                  </div>
              </div>
          </div> <br>
                  <div align=" center">
                      <label for=""><b>Select Gender</b></label>       
                     
                      <div>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Others">Others <br>
                        <span class="text-danger"> @error('gender') {{$message}}@enderror </span><br>
                      </div><br>
                      <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
      </form>
    </div>     
  </body>
</html>