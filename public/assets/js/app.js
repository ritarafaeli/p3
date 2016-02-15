var myApp = angular.module('myApp', ['ngRoute']);


myApp.controller('mainController', ['$scope', '$location', '$log', '$routeParams', '$http', function($scope, $location, $log, $routeParams, $http) {

    $scope.status;
    $scope.paragraphs = "";

    console.log('log this, controller');

    $scope.generateParagraphs = function() {
        console.log('about to post..');
        $http.post('loremipsum/post', {
            numParagraphs: $scope.numParagraphs
        })
            .success(function(response) {
                $scope.paragraphs = response;
                console.log("success: " + $scope.paragraphs);
            }).error(function(response) {
                $scope.status = response;
                console.log("failed: " + $scope.status);
            }
        );
    }
}]);
