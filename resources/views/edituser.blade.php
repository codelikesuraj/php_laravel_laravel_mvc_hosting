<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit User</title>
    </head>
    <body>
        <h1>Edit User</h1>

        <p><a href="{{route('user.all')}}">All users</a> > <strong>Edit user</strong></p>

        @include('includes.status')
        @include('includes.errors')

        <form method="post" action="{{route('user.update', $user->id)}}">
            @csrf
            @method('PUT')
            <p>Name: <input type="text" name="name" placeholder="enter full name" value="{{old('name', ucwords($user->name))}}" required></p>
            <p>Email: <input type="email" name="email" placeholder="enter valid email" value="{{old('email', $user->email)}}" required></p>
            <p>Phone: <input type="text" name="phone" placeholder="enter valid phone number" value="{{old('phone', $user->phone)}}" required></p>
            <p><button type="submit">Update</button></p>
        </form>
    </body>
</html>