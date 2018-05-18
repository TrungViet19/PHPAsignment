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
        .row.content {
            height: 1500px
        }

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

            .row.content {
                height: auto;
            }
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
            </ul>
            <br>
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
            <h2>Add Student</h2>
            <form class="form-horizontal" action="/addStudent" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label col-sm-2" for="id">Rollnumber:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="rollnumber" placeholder="Enter rollnumber"
                               name="rollnumber">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Phone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                </div>
                {{--<div class="form-group">--}}
                {{--<div class="col-sm-offset-2 col-sm-10">--}}
                {{--<div class="checkbox">--}}
                {{--<label><input type="checkbox" name="remember"> Remember me</label>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add
                </button>


                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Student</h4>
                            </div>
                            <div class="modal-body">
                                <p>Add Student success.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

                {{--<div class="form-group">--}}
                    {{--<div class="col-sm-offset-2 col-sm-10">--}}
                        {{--<button type="submit" class="btn btn-default">Add</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </form>


        </div>


    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
