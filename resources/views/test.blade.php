<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Pagination Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
                @foreach($test as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->book_name }}</td>
                    <td>{{ $data->book_writer }}</td>
                    <td>{{ $data->book_type }}</td>
                    <td>{{ $data->lang }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <span >
        {{ $test->links() }}
        </span>
            
    
</body>
<style>
    .w-5
    {
        display:none;
        margin-left:100px;
    }
</style>
</html>