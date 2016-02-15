<!DOCTYPE html>
<html lang="en-us" ng-app="myApp">
<head>
    <title>Margarita Rafaeli - Developer's Best Friend</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <style>
        html, body, input, select, textarea
        {
            font-size: 1.05em;
        }
    </style>

    <!-- angularjs -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular-route.min.js"></script>
    <script src="../../../public/app/lib/app.js"></script>
</head>
<body>

<div class="panel panel-default">

    <div class="panel-heading">
        <h1>Margarita Rafaeli</h1>
        <p>Dynamic Web Applications | Spring 2016 | Project 3</p>
    </div>
    <div class="panel-body" ng-controller="mainController">

        <h3>Developer's Best Friend</h3>

        <div>
            @yield('content')
        </div>

    </div>
    <div class="panel-footer clearfix">
        <div class="pull-right">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://dwa15.com/Home"> DWA</a></li>
                <li><a href="https://laravel.com/"> Laravel</a></li>
                <li><a href="https://angularjs.org/"> AngularJS</a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
