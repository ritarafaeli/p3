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

    <!--AngularJS-->
    @extends('angular')

</head>
<body>

<div class="panel panel-default" ng-controller="mainController">

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Margarita Rafaeli | Developer's Best Friend</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li ng-class="{active:isSet(1)}"><a ng-click="setTab(1)">Lorem Ipsum</a></li>
                    <li ng-class="{active:isSet(2)}"><a ng-click="setTab(2)">Random User</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container body-content">
        <h3>Developer's Best Friend</h3>

        <div ng-show="isSet(1)">
            @include('includes.loremipsum')
        </div>

        <div ng-show="isSet(2)">
            @include('includes.randomuser')
        </div>

    </div>

</div>

</body>
</html>
