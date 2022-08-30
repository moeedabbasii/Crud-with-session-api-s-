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
  <body style="">
      <div class="container-fluid bg-dark">
      <div class="container">
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="#"style="color:white"> @if (session()->has('User_Name'))
                {{ session()->get("User_Name") }}
                @else
                Guest
                @endif</a>
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
    <div class=" d-flex justify-content-center" >
      <form method="post" action="/update/{{$data->id}}" ><br>
        @csrf
      <h1 align="center" class=" btn-primary">Updation Form</h1><br>

           <div class="row">
              <div class="col">
                  <label for="name"class=""><b>Name</b></label>
                  <input type="text"
                  class="form-control" name="name" id="name"value="{{$data->name}}" aria-describedby="helpId" placeholder="Enter Name">
                  <span class="text-danger"> @error('name') {{$message}}@enderror </span>
              </div>

               <div class="col">
                    <label for="email" class=""><b>Email</b></label>
                    <input type="email"
                    class="form-control" name="email" id="email" value="{{$data->email}}" aria-describedby="helpId" placeholder="Enter email">
                    <span class="text-danger"> @error('email') {{$message}}@enderror </span>
               </div>
           </div>

           <div class="row">
                <div class="col">
                    <label for="contact" class=""><b>Contact</b></label>
                    <input type="text"
                    class="form-control" name="contact" id="contact" value="{{$data->contact}}" aria-describedby="helpId" placeholder="+92......." >
                    <span class="text-danger"> @error('contact') {{$message}}@enderror </span>
                </div>

                <div class="col">
                    <label for="country" class=""><b>Country</b></label>
                    <input type="text"
                    class="form-control" name="country" id="country" value="{{$data->country}}" aria-describedby="helpId" placeholder="Write your Country">
                    <span class="text-danger"> @error('country') {{$message}}@enderror </span>
                </div>
            </div>

            <div class="row">
                  <div class="col">
                    <div class="form-group">
                        <label for="province"><b>Province/State</b></label>
                        <select class="form-control" name="province" id="">
                            <option>Punjab</option>
                            <option>Sindh</option>
                            <option>KPK</option>
                            <option>Balochistan</option>
                            <option>Azad Kashmir</option>
                            <option>Gilgibaltistan</option>
                        </select>
                    </div>
                    <span class="text-danger"> @error('province') {{$message}}@enderror </span>
                      {{-- <label for="province" class=""><b> Province</b></label> --}}
                      {{-- <input type="text"
                      class="form-control" name="province" id="province"value="{{$data->province}}" aria-describedby="helpId" placeholder="Write your province" >--}}
                     {{-- <span class="text-danger"> @error('province') {{$message}}@enderror </span> --}}
            </div>

                  <div class="col">
                      <label for="address" class=""><b>Address</b></label>
                      <input type="text"
                      class="form-control" name="address" id="address" value="{{$data->address}}" aria-describedby="helpId" placeholder="Enter your address">
                      <span class="text-danger"> @error('address') {{$message}}@enderror </span>
                  </div>
           </div>
           <div class="row">
                <div class="col">
                    <label for="password" class=""><b>Password</b></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                    <span class="text-danger"> @error('password') {{$message}}@enderror </span>
                </div>

                <div class="col">
                      <label for="cpassword" class=""><b>ConfirmPassword</b></label>
                      <input type="password" class="form-control" name="confirm_password" id="cpassword" placeholder="Again enter password">
                      <span class="text-danger"> @error('confirm_password') {{$message}}@enderror </span>
                </div>
           </div>
           <br>
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
