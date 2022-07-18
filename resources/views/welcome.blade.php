<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome</title>
</head>

<body>
    <div class="container-fluid row py-3">
        <div class="col-12">
            <center>
                <h1>User Management System</h1>
                <h5 class="my-3">Built with <a class="text-danger text-decoration-none" href="https://laravel.com" target="_blank">Laravel</a> Framework + <a class="text-primary text-decoration-none" href="https://getbootstrap.com/" target="_blank">Bootstrap CSS</a></h5>
            </center>
        </div>

        <div class="col-12 my-5">
            <center>
                <h2 class="">Application Functionalities</h2>
                <ul class="list-unstyled fs-4">
                    <li><a class="text-dark" href="{{route('user.all')}}">View</a> all users</li>
                    <li><a class="text-dark" href="{{route('user.create')}}">Create</a> a new user</li>
                    <li>Edit a user</li>
                    <li>Delete a user</li>
                </ul>
            </center>
        </div>
    </div>
</body>

</html>
