<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Bài kiểm tra</title>
    <style>
        .row col-auto{
            padding-top: 20px;
        }
        .container {
            padding-top: 40px;
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(255, 205, 205);
            width: 400px;
            height: 300px;

        }
        .main {
            text-align: center;
            padding-top: 17px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center; padding-bottom: 13px"><b>Edit Student</b></h2>
    <form action="/student/update/{{ $student->id }}" method="post">
        @csrf
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputFullname" class="col-form-label">Fullname:</label>
            </div>
            <div class="col-auto">
                <input type="text" name="fullname" value="{{ $student->fullname }}">
            </div>

          </div>
          <div class="row g-3 align-items-center">
            <div class="col-auto" >
              <label for="inputBirthday" class="col-form-label">Birthday:  </label>
            </div>
            <div class="col-auto">
                <input type="text" name="birthday" value="{{ $student->birthday }}">
            </div>

          </div>
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputAddress" class="col-form-label">Address:  </label>
            </div>
            <div class="col-auto">
                <input type="text" name="address" value="{{ $student->address }}">
            </div>

          </div>
          <div class="main">
            <button type="submit"> <b><i>Edit student</i></b> </button>
          </div>
    </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
