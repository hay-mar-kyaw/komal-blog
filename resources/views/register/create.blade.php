<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center my-5">Register Form</h3>
                <div class="card m-5 p-5 shadow-sm">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                          <label  class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" value={{old('name')}}>
                        </div>
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="mb-3">
                            <label  class="form-label">UserName</label>
                            <input type="text" class="form-control" name="username" value={{old('username')}} required>
                        </div>
                        @error('username')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="mb-3">
                            <label  class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" value={{old('email')}} required>
                        </div>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" name="password" required>
                        </div>
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
