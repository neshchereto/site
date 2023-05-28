<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        .table-bordered {
            border-collapse: collapse;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dddddd;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table class="table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('form')
</body>
</html>
