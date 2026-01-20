<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Diaply Data</title>
</head>
<style>
    .w-5.h-5 {
        width: 20px;
        height: auto;
    }
</style>

<body>
    <center>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            @foreach ($data as $datas)
                <tr>
                    <td>{{ $datas->id }}</td>
                    <td>{{ $datas->name }}</td>
                    <td>{{ $datas->email }}</td>
                    <td>{{ $datas->password }}</td>
                </tr>
            @endforeach
        </table>
        {{ $data->links() }}
    </center>
</body>

</html>