var myApp = angular.module('myApp', ['ngRoute']);


myApp.config( function ($routeProvider){

    $routeProvider.when('/generate', {
        templateUrl: 'generate.php',
        controller: 'mainController'
    });
});


myApp.controller('mainController', ['$scope', '$location', '$log', '$routeParams', '$http', function($scope, $location, $log, $routeParams, $http) {


}]);
