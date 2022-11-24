<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show all users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: black;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,td {
            border: 1px solid grey;
            padding: 5px;
        }

        tr {
            background-color: wheat;
        }

        tr:nth-child(even){
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <main>
        <h1>Show all users</h1>
        <hr>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Photo</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>Address</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->photo}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->birthdate}}</td>
                        <td>{{$user->address}}</td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </main>
</body>
</html>