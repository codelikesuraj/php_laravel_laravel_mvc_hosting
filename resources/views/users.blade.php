<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>All Users</title>
</head>

<body class="container-fluid">
    <div class="row d-flex justify-content-center py-3 px-0">
        <div class="col-12">
            <center>
                <h1>All Users</h1>
            </center>
        </div>

        <div class="col-12 row my-4 mx-auto p-0">
            <div class="col-12 d-flex justify-content-end my-2">
                <a class="btn btn-success" href="{{ route('user.create') }}">Create New User</a>
            </div>

            <div class="col-12 d-flex justify-content-center">
                @include('includes.status')
                @include('includes.errors')
            </div>

            <div class="overflow-auto my-2">
                <table class="table table-striped text-center ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ ucwords($user->name) }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <form method="post" action="{{ route('user.delete', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-outline-warning text-dark btn-sm"
                                            href="{{ route('user.edit', $user->id) }}">Edit</a>
                                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <center>There are no users!!!</center>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
