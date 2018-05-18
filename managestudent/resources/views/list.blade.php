<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>T1707M Manage student</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="http://localhost:8000">Home</a></li>
                <li><a href="http://localhost:8000/list">List student</a></li>
                <li><a href="http://localhost:8000/add">Add student</a></li>
                <li><a href="http://localhost:8000/update">Update student</a></li>
                <li><a href="http://localhost:8000/delete">Delete student</a></li>
            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
            </div>
        </div>

        <div class="col-sm-9">
            <h2>List Student</h2>
            <table class="table table-condensed">
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>Firstname</th>--}}
                    {{--<th>Lastname</th>--}}
                    {{--<th>Email</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<td>John</td>--}}
                    {{--<td>Doe</td>--}}
                    {{--<td>john@example.com</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>Mary</td>--}}
                    {{--<td>Moe</td>--}}
                    {{--<td>mary@example.com</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<td>July</td>--}}
                    {{--<td>Dooley</td>--}}
                    {{--<td>july@example.com</td>--}}
                {{--</tr>--}}
                {{--</tbody>--}}

                {{--@foreach($allStudent as $key => $student)--}}
                    {{--<tr>--}}
                        {{--<td>{{$key + 1}}</td>--}}
                        {{--<td>{{$student -> rollNumber}}</td>--}}
                        {{--<td>{{$student -> name}}</td>--}}
                        {{--<td>{{$student -> phone}}</td>--}}
                        {{--<td>{{$student -> email}}</td>--}}
                        {{--<td><button class="btn btn-default"><i class="glyphicon glyphicon-edit text-warning"></i></button></td>--}}
                        {{--<td><button class="btn btn-default"><i class="glyphicon glyphicon-trash text-danger"></i></button></td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
            </table>




        </div>


    </div>
</div>



<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
