<!DOCTYPE html>
<html>
<head>
	<title>Angular latihan</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
	<ul>
		<li ng-repeat="x in names">
			{{ x.name + ", " + x.country }}
		</li>
	</ul>
</div>

<script>
	
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function ($scope) {
		$scope.names = [{name:'Raka',country:'Indonesia'},{name:'Van Persie',country:'Belanda'},{name:'Nagatomo',country:'Jepang'}];
	});
	

</script>

<a href="latihan9.php">next</a>

</body>
</html>