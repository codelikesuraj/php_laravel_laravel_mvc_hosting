<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Users</title>
    </head>
    <body>
        <h1>All Users</h1>

        <p><a href="{{route('user.create')}}">Create New User</a></p>

        @include('includes.status')
        @include('includes.errors')
        
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ucwords($user->name)}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td><a href="{{route('user.edit', $user->id)}}">edit</a></td>
                        <td>
                            <form method="post" action="{{route('user.delete', $user->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6"><center>There are no users!!!</center></td></tr>
                @endforelse
            </tbody>
        </table>
    </body>
</html>