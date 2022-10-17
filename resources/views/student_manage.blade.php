<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Bài kiểm tra</title>
</head>
<body>
<div class="container">
    <h1 style="text-align: center; padding-bottom: 25px; padding-top: 25px" ><b>Student List</b></h1>
    <table class="table table-success table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Full name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
                  <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->fullname }}</td>
                      <td>{{ $student->birthday }}</td>
                      <td>{{ $student->address }}</td>
                      <td><a href="/student/edit/{{$student->id}}">Edit</a></td>
                  </tr>
              @endforeach
        </tbody>
      </table>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
