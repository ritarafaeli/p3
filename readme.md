##Live URL
[p3.ritarafaeli.me](http://p3.ritarafaeli.me)

##Project Description
Developer's Best Friend(Project 3) is a web app using Laravel 5.2 PHP Framework and AngularJS. The application includes a Lorem Ipsum Generator and a Random User Generator.

##Demo
TBU

##Details
* __p3\app\Http\Controllers\LoremIpsumController.php__
  * __postFormInput__ - Takes user input from Request object and uses 3rd party Lipsum package to generate json
  * __download__ - Takes paragraph json and uses 3rd party Excel package to generate CSV

* __p3\app\Http\Controllers\RandomUserController.php__
  * __postFormInput__ - Takes user input from Request object and uses 3rd party Faker package to generate json
  * __download__ - Takes paragraph json and uses 3rd party Excel package to generate CSV

* __p3\public\assets\js\app.js__
  * __generateParagraphs()__ sends post request to loremipsum/post and retrieves back a json
  * __downloadLipsumParagraphs()__ sends post request to loremipsum/download and retrieves back a byte array of data and then downloads it as a CSV
  * __downloadRandomUsers()__ sends post request to randomuser/download and retrieves back a byte array of data and then downloads it as a CSV
  * __generateUsers()__ sends post request to randomuser/post and retrieves back a json
  * __$scope.tab__ Keeps track of the tab the user is one (initial is set to 0 for main page)
  * __$scope.errors__ Error response from randomuser/post request
  * __$scope.errorsLipsum__ Error response from loremipsum/post request
* _p3\resources\views\includes\randomuser.blade.php__
  * Displays user form. Once user form is submitted and there are no errors, the data requested is displayed and as an added feature, the user can download the data as a CSV
* __p3\resources\views\includes\loremipsum.blade.php__
  * Displays user form. Once user form is submitted and there are no errors, the data requested is displayed and as an added feature, the user can download the data as a CSV

##Plugins/Libraries
* [Laravel 5](https://laravel.com/)
* [AngularJS](https://angularjs.org/)
* [Bootstrap](http://getbootstrap.com/)
* [magyarjeti/laravel-lipsum](https://github.com/magyarjeti/laravel-lipsum) Generate lipsum paragraphs
* [fzaninotto/faker](https://github.com/fzaninotto/Faker) Generate fake user data
* [maatwebsite/excel](https://github.com/Maatwebsite/Laravel-Excel) Download data to CSV
* [FileSaver.js](https://github.com/eligrey/FileSaver.js/) Save blob as readable file
