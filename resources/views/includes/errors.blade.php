@if(Session::has('errors'))
    <div class="alert alert-danger pb-0 pt-3">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif