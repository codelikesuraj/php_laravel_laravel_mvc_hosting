<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit User</title>
</head>

<body class="container-fluid">
    <div class="row d-flex justify-content-center py-3 px-0">
        <div class="col-12">
            <center>
                <h1>Edit User</h1>
            </center>
        </div>

        <div class="col-12 row my-4 mx-auto d-flex justify-content-center p-0">
            <div class="col-lg-6 col-sm-12 my-4">
                <div class="col-12 d-flex justify-content-end mb-3">
                    <a class="btn btn-success" href="{{ route('user.all') }}">View All Users</a>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    @include('includes.status')
                    @include('includes.errors')
                </div>

                <form method="post" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name"
                            placeholder="enter full name" value="{{ old('name', ucwords($user->name)) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email"id="email" name="email"
                            placeholder="enter valid email" value="{{ old('email', $user->email) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input class="form-control" type="text" id="phone" name="phone"
                            placeholder="enter valid phone number" value="{{ old('phone', $user->phone) }}" required>
                    </div>

                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
