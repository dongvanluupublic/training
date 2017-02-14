<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel 5.2 - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .row.content {height: 890px}
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
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
            <h4>Report Management</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/">Inbox <span class="badge">5</span></a></li>
                <li><a href="/">Sent</a></li>
                <li><a href="/">Drafts <span class="badge">2</span></a></li>
                <li><a href="/">Junk <span class="badge">10</span></a></li>
                <li><a href="/">Trash</a></li>
            </ul>
            <br>

            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
            <br>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    Trong Hieu <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Change Infomation</a></li>
                    <li><a href="#">Change password</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9">
            @yield('content')
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Copyright 2017</p>
</footer>

</body>
</html>