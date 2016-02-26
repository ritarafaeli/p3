var myApp = angular.module('myApp', ['ngRoute']);


myApp.controller('mainController', ['$scope', '$location', '$log', '$routeParams', '$http', function($scope, $location, $log, $routeParams, $http) {

    $scope.num = 3;
    $scope.status;
    $scope.paragraphs = "";
    $scope.users;

    $scope.generateParagraphs = function() {
        console.log('generate paragraphs');
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

    $scope.generateUsers = function(){
        console.log('generate users');
        $http.post('randomuser/post', {
                num : $scope.num,
                birthday : $scope.birthday,
                profile : $scope.profile
            })
            .success(function(response) {
                $scope.users = response;
                console.log("success: " + $scope.users);
                console.log("response: " + response);

            }).error(function(response) {
                $scope.status = response;
                console.log("failed: " + $scope.status);
            }
        );
    }

    $scope.tab = 1;
    $scope.setTab = function (tabId) {
        this.tab = tabId;
    };
    $scope.isSet = function (tabId) {
        return this.tab === tabId;
    };

}]);
