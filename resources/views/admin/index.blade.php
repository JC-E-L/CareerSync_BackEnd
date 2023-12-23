<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Admin Page</title>
</head>
<body>
    <h1>Admin Page</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('admin.create')}}">Add a User</a>
        </div>
        <table class="border-2">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Admin</th>
            </tr>
            @foreach($admin as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->admin}}</td>
                    <td>
                        <a href="{{route('admin.edit', ['admin' => $user])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('admin.destroy', ['admin' => $user])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
</body>
</html>