<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Simply Me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }
        .navbar-nav  li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Me</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">WHO</a></li>
                <li><a href="#">WHAT</a></li>
                <li><a href="#">WHERE</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- First Container -->
<div class="container">
    <h2>Timeslots today 30/05/2018</h2>
    <br>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th class="col-md-2">Slot ID</th>
            <th class="col-md-2">Timeslot</th>
            <th class="col-md-2">Subject</th>
            <th class="col-md-3">ClassID</th>
            <th class="col-md-3">Action</th>

        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p>Trần Trung Việt - D00465 - T1707M</p>
</footer>

</body>
</html>
