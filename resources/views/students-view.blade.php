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

    
    <div class="container">
      <a href="{{url('/')}}/students-add">
        <button class="float-right btn btn-primary mt-5 mb-5">Add</button>
      </a>  
      <table class="table table-striped ">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>State</th>
                <th>Country</th>
                <th>Gender</th>
                <th>DoB</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->state}}</td>
                <td>{{$student->country}}</td>
                <td>
                    @if($student->gender == 'M')
                        Male
                    @else
                        Female
                    @endif
                </td>
                <td>{{$student->dob}}</td>
                <td>
                    @if($student->status == '1')
                       <a href=""> 
                        <span class="badge badge-success">Active</span>
                       </a>
                    @else
                       <a href=""> 
                        <span class="badge badge-danger">InActive</span>
                       </a>
                    @endif
                </td>
                <td>
                    <a href="{{url('/')}}/students-upd/{{$student->student_id}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{route('students.upd', ['id' => $student->student_id])}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
      </table>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>