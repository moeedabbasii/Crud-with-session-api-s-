<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="\css\app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color:grey;background: linear-gradient(90deg, rgba(36,0,0,1) 0%, rgba(153,41,143,1) 40%, rgba(217,64,219,1) 61%, rgba(122,76,164,1) 70%, rgba(219,64,132,1) 77%, rgba(173,64,219,1) 93%);" >
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
            <br><br>
            <div class="text-center" >
        <h2 style="color:red; text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px white;"><u> I am Backend Developer </u></h2><br>
        <img src="images/pic1.jpg" class="rounded-circle" alt="Cinque Terre" width="500" height="400">

</div><br><br><br>
<footer>
            <div class="row">
              <div class="col-md-4"></div>
                <div class="col">
                    <img src="images/html.png" class="rounded-circle" alt="" width="30" height="30">
                    <p style="color: solid black">Html</p>
                </div>
                <div class="col">
                    <img src="images/css.png" class="rounded-circle" alt="" width="30" height="30">
                    <p style="color: solid black">Css</p>
                </div>
                <div class="col">
                    <img src="images/javascript.png" class="rounded-circle" alt="" width="30" height="30">
                    <p style="color:solid black">javascript</p>
                </div>
                <div class="col">
                    <img src="images/jquery.jpg" class="rounded-circle" alt="" width="30" height="30">
                    <p style="color:solid black">Jquery</p>
                </div>
                <div class="col">
                    <img src="images/laravel.png" class="rounded-circle" alt="" width="30" height="30">
                    <p style="color:solid black"> Laravel</p>
                </div>
              <div class="col-md-4"></div>


            </div>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
