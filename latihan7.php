<!DOCTYPE html>
<html>
<head>
	<title>Angular latihan</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
	<h1 ng-click="changeName()">Hello {{ firstName + " " + lastName }}</h1>
	<br>
	<h1> Full Name {{ fullName() }}</h1>
</div>

<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function ($scope) {
		$scope.firstName = "Raka";
		$scope.changeName = function(){
			$scope.firstName = "Maheka";
		}
		$scope.lastName = "Auramuwahid";
		$scope.fullName = function(){
			return $scope.firstName + " " + $scope.lastName;
		}
	});
	
</script>

<a href="latihan8.php">next</a>

</body>
</html>