<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 100px; margin-left: 30px;">
        <h1>USER LIST</h1>
            {{-- <link rel="stylesheet" href="{{ asset('backend/registration/css/style.css') }}"> --}}
            <div class="registration_button">
                <a href="{{ route('user.create') }}" class="btn btn-success">ADD USER</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role ID</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key=>$user)
                        <tr>
                            <th>{{$key+1}}</th>
                            <td>{{$user->name}}</td>
                            <td><img src="{{url('/uploads/users/'.$user->image)}}"></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role_id }}</td>
                            <td>
                                <a href="#"><i class="fa-solid fa-eye"></i></a>
                                <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
</body>
</html>