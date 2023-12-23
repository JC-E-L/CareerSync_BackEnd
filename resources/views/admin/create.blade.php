<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1>Create a User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>


            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('admin.store')}}">
        @csrf
        @method('post') 
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
            <label for="">E-Mail:</label>
            <input type="text" name="email" placeholder="email"/>
        </div>
        <div>
            <label for="">Password:</label>
            <input type="password" name="password" placeholder="password"/>
        </div>
        <div>
            <label for="">Admin:</label>
            <input type="text" name="admin" placeholder="status"/>
        </div>
        <div>
            <input type="submit" value="Save"/>
        </div>
    </form>
</body>
</html>