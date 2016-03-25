<!DOCTYPE html>
<html lang="en-us" ng-app="myApp">
<head>
    <title>Margarita Rafaeli - Developer's Best Friend</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
    <script src="{{URL::asset('assets/js/FileSaver.js')}}"></script>
    <!--AngularJS-->
    @extends('angular')
    <!-- bootstrap -->
    @extends('bootstrap')
</head>
<body>
<div class="panel panel-default" ng-controller="mainController">
    <nav class = "navbar navbar-inverse" role = "navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#dropdown">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a ng-click="setTab(0)" class="navbar-brand">Margarita Rafaeli | Developer's Best Friend</a>
        </div>
        <div id="dropdown" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li ng-class="{active:isSet(1)}"><a ng-click="setTab(1)">Lorem Ipsum</a></li>
                <li ng-class="{active:isSet(2)}"><a ng-click="setTab(2)">Random User</a></li>
            </ul>
        </div>
    </nav>
    <div class="container body-content" ng-cloak>
        <div ng-show="isSet(0)">
            <p>Welcome to Developer's Best Friend. Here you will find some cool tools that generate random data.</p>
            <p>There is a Lorem Ipsum Generator, which generates filler text, allowing you to specify the number of paragraphs to generate. For more information on Lorem Ipsum, click <a href="https://en.wikipedia.org/wiki/Lorem_ipsum" target="_blank">here</a>.</p>
            <p>Another tool for your disposal is a Random User Generator, which generates random user data, such as name, birthday, profile blurb, depending on the criteria selected.</p>
        </div>
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
