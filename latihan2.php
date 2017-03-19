<!DOCTYPE html>
<html>
<head>
	<title>Angular latihan</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl" ng-init="myCol='red';buku=2000;pulpen=3000">
	First Name <input type="text" ng-model="firstName"><br>
	Last Name <input type="text" ng-model="lastName"><br>
	Full Name {{ firstName + " " + lastName }}
	<br>
	<input type="text" style="background-color:{{myCol}}" ng-model="myCol" value="{{ myCol }}">
	<br>
	<h1>Harga Total {{ buku + pulpen }}</h1>
</div>

<a href="latihan3.php">next</a>

<script>
	
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function ($scope){

		$scope.firstName = 'John';
		$scope.lastName = 'Doe';
		
	});

</script>
</body>
</html>