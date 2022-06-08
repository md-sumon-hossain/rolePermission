<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Create</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div>
        <h1>Create User</h1>
    </div>
    <div>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf   
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ente Name" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upload file">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>