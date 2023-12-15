@extends('layout.main')
@section('main-section')
    
<!doctype html>
<html lang="en">
    <head>
        <title>Registered user</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
       <div
        class="table-responsive"
       >
       <h1 class="text-center">STUDENTS INFORMATION</h1>
        <table
            class="table table-danger"
        >
            <thead class="table-dark">
                <tr>
                    <th scope="col">USER ID</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">USER EMAIL</th>
                    <th scope="col">USER EDIT</th>
                    <th scope="col">USER DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $item)
                    
                <tr class="table-dark">
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td><a href="{{route('user.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{route('user.dlt' , $item->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
       </div>
       



         <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>





@endsection