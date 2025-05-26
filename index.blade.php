<!DOCTYPE html>
<html>
    <head>
        <title> Users List </title>
        <style>
            table { width: 60%; margin:30px auto; border-collapse: collapse;}
            th, td{border: 1px solid; padding: 8px; text-align: center;}
            form{ display:inline;}
        </style>
    </head>
    <body>
        <h2 style="text-align:center;" Users Table</h2>
            @if(session('success'))
                <p style = "color:green, text-align: center;">{{session('success')}} </p>
            @endif

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user-> name }}</td>
                        <td>{{ $user-> email }}</td>
                        <td>{{ $user-> department_name}}</td>
                        <td> 
                            <form action="{{ url('/Users/' . $user->id)}}" method= "POST" onsubmit = "return confirm('Delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type = "submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </body>
</html>