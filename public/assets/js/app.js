var myApp = angular.module('myApp', ['ngRoute']);


myApp.controller('mainController', ['$scope', '$location', '$log', '$routeParams', '$http', function($scope, $location, $log, $routeParams, $http) {

    $scope.numParagraphs = 3;
    $scope.num = 3; //number of randomusers to generate, default set to 3
    $scope.errors; //error response from random user post requests
    $scope.errorsLipsum; //error response from lipsum post requests
    $scope.paragraphs = ""; //loremipsum text to be displayed
    $scope.users; //randomuser json

    //sends post request to the loremipsum route
    $scope.generateParagraphs = function() {
        $scope.errorsLipsum = "";
        $http.post('loremipsum/post', {
                numParagraphs: $scope.numParagraphs
            })
            .success(function(response) {
                $scope.paragraphs = response;
                console.log("success: " + $scope.paragraphs);
            }).error(function(response) {
                $scope.errorsLipsum = response;
                console.log("failed: " + $scope.errors);
            }
        );
    }

    //sends post request to generate and download xls for random users
   /* $scope.downloadRandomUsers = function() {
        $scope.errorsDownload = "";
        $http.post('randomuser/download', $scope.users)
            .success(function(response) {
                console.log("success: " + response);
            }).error(function(response) {
                console.log("failed: " + response);
            }
        );

    }*/

    $scope.downloadRandomUsers = function() {
        $scope.errorsDownload = "";
        $http({
            url: 'randomuser/download',
            method: 'POST',
            responseType: 'arraybuffer',
            data: $scope.users,
            headers: {
                'Content-type': 'application/json',
                'Accept': 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            }
        }).success(function(data){
            var blob = new Blob([data], {
                type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            });
            saveAs(blob, 'RandomUsers' + '.xlsx');
        }).error(function(){
            //Some error log
        });

    }





    //sends post request to the randomuser route
    $scope.generateUsers = function(){
        console.log('generate users');
        $scope.errors = "";
        $http.post('randomuser/post', {
                num : $scope.num,
                birthday : $scope.birthday,
                profile : $scope.profile,
                email : $scope.email
            })
            .success(function(response) {
                $scope.users = response;
                console.log("success: " + $scope.users);
                console.log("response: " + response);

            }).error(function(response) {
                $scope.errors = response;
                console.log("failed: " + $scope.errors);
            }
        );
    }

    //default tab is set to the welcome blurb
    $scope.tab = 0;

    //sets the selected tab
    $scope.setTab = function (tabId) {
        this.tab = tabId;
    };

    //boolean returns whether that tab is selected
    $scope.isSet = function (tabId) {
        return this.tab === tabId;
    };

}]);
