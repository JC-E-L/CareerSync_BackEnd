<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1>Edit a User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>


            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('admin.update', ['admin' => $admin])}}">
        @csrf
        @method('put') 
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" placeholder="name" value="{{$admin->name}}"/>
        </div>
        <div>
            <label for="">E-Mail:</label>
            <input type="text" name="email" placeholder="email" value="{{$admin->email}}"/>
        </div>
        <div>
            <label for="">Password:</label>
            <input type="password" name="password" placeholder="password" value="{{$admin->password}}"/>
        </div>
        <div>
            <label for="">Admin:</label>
            <input type="text" name="admin" placeholder="status" value="{{$admin->admin}}"/>
        </div>
        <div>
            <input type="submit" value="Update"/>
        </div>
    </form>
</body>
</html>