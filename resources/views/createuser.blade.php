<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create User</title>
    </head>
    <body>
        <h1>Create User</h1>

        <p><a href="{{route('user.all')}}">All users</a> > <strong>Create user</strong></p>

        @include('includes.status')
        @include('includes.errors')

        <form method="post" action="{{route('user.store')}}">
            @csrf
            <p>Name: <input type="text" name="name" placeholder="enter full name" value="{{old('name')}}" required></p>
            <p>Email: <input type="email" name="email" placeholder="enter valid email" value="{{old('email')}}" required></p>
            <p>Phone: <input type="text" name="phone" placeholder="enter valid phone number" value="{{old('phone')}}" required></p>
            <p><button type="submit">Save</button></p>
        </form>
    </body>
</html>