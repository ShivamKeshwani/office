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
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">SpiceTech</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}/students-add">Add</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}/students-view">Students</a>
                </li>
            </ul>               
        </div>
      </nav>
    <div class="container col-sm-8 justify-content-center">
      <form action="{{$url}}" method="post">
        @csrf
        <h3 class="text-{{$color}} text-center col-sm-12 mt-5">
            {{$title}}
        </h3>
        <div class="row mt-4">
            <div class="form-group col-sm-6">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{$students->name}}">
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="{{$students->email}}">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col-sm-6">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group col-sm-6">
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control">
                <span class="text-danger">
                    @error('password_confirmation')
                        {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col-sm-6">
                <label for="">Country</label>
                <input type="text" name="country" class="form-control" value="{{$students->country}}">
                <span class="text-danger">
                    @error('country')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group col-sm-6">
                <label for="">State</label>
                <input type="text" name="state" class="form-control" value="{{$students->state}}">
                <span class="text-danger">
                    @error('state')
                        {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col-sm-12">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" value="{{$students->address}}">
                <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col-sm-6">
                <label for="">Gender</label><br>
                <input type="radio" name="gender" value="M" {{$students->gender == 'M' ? "checked" : ""}}>
                <label class="mr-1 form-check-label">Male</label>
                <input type="radio" name="gender" value="F" {{$students->gender == 'F' ? "checked" : ""}}>
                <label for="">Female</label><br>
                <span class="text-danger">
                    @error('gender')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group col-sm-6">
                <label for="">DoB</label>
                <input type="date" name="dob" class="form-control" value="{{$students->dob}}">
                <span class="text-danger">
                    @error('dob')
                        {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <button type="submit" class="btn btn-{{$color}} btn-lg btn-block mt-3">{{$btname}}</button>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>