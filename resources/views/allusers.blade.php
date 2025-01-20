<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>All User List</h1>
            <table class="table table-bordered table-striped">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Show</th>
                </tr>
                @foreach ( $data as $id=>$user)
                <tr>
                    <td> {{$user->id}}</td>
                    <td> {{$user->name}}</td>
                    <td>  {{$user->email}}</td>
                    <td>  {{$user->age}}</td>
                    <td>  {{$user->city}}</td>
                    <td>  <a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                  </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>



@foreach ( $data as $id=>$user)

@endforeach

