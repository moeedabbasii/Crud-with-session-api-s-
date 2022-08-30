<!doctype html>
<html lang="en">
  <head>
    <title>Trash</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="container-fluid bg-dark">
      <div class="container">
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="#"style="color:white">
                @if (session()->has('User_Name'))
                {{ session()->get("User_Name") }}
                @else
                Guest
                @endif
            </a>
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
</head>
  <body>
  <a name="" id="" class="btn btn-primary d-inline-block m-2 float-right" href="{{url('/register')}}" role="button">Add</a>
  <a name="" id="" class="btn btn-primary d-inline-block m-2 float-right" href="{{url('/view')}}" role="button">Customer View</a>
    <table class="table table-striped" class="text-center" border='2px'style="background-color:lightgrey">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Country</th>
                <th>Province</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>



            </tr>
        </thead>
        <tbody>
                @foreach($entries as $customer)
           <tr>
              <td>{{$customer->name}}</td>
              <td>{{$customer->email}}</td>
              <td>{{$customer->contact}}</td>
              <td>{{$customer->country}}</td>
              <td>{{$customer->province}}</td>
              <td>{{$customer->address}}</td>
              <td>{{$customer->gender}}</td>

              <td ><a href="/permanentDelete/{{$customer->id}}" ><button class="btn btn-danger">Delete</button></a>
              <a href="/restore/{{$customer->id}}" >  <button class="btn btn-primary">ReStore</button></a>
              </td>
           </tr>
            @endforeach
            </tr>
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
