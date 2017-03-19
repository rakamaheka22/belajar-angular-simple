<!DOCTYPE html>
<html>
<head>
	<title>Angular latihan</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body ng-app="myApp">

<div ng-controller="myCtrl">
	<h4>Hello, {{ firstName | uppercase }} {{ lastName | lowercase }} tagihan yang harus dibayar : {{ harga | currency }}</h4>
</div>

<div ng-controller="arrayCtrl">
	<ul>
		<li ng-repeat="x in names | orderBy:'name'">{{ x.name + ", " + x.country }}</li>
	</ul>
	<ul>
		<li ng-repeat="x in names | filter:'o'">{{ x.name + ", " + x.country }}</li>
	</ul>
	<br>
	<input type="text" ng-model="test" placeholder="search...">
	<ul>
		<li ng-repeat="x in names | filter:test">{{ x.name + ", " + x.country }}</li>
	</ul>
	<br>
	<br>
	<table>
		<thead>
			<tr>
				<th ng-click="orderByMe('name')">NAME</th>
				<th ng-click="orderByMe('country')">COUNTRY</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="x in names | orderBy:myOrder">
				<td>{{ x.name }}</td>
				<td>{{ x.country }}</td>
			</tr>
		</tbody>
	</table>
	<br>
	<ul>
		<li ng-repeat="x in names">{{ x | myFormat }}</li>
	</ul>
</div>

<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function ($scope) {
		$scope.firstName = "raka";
		$scope.lastName = "MAHEKA"
		$scope.harga = 100000;
	});
	app.controller('arrayCtrl', function ($scope) {
		$scope.names = [{name:'Raka',country:'Indonesia'},{name:'Van Persie',country:'Belanda'},{name:'Nagatomo',country:'Jepang'}];
		$scope.orderByMe = function(x){
			$scope.myOrder = x;
		}
	});
	app.filter('myFormat',function() {
		return function(x){
			var i,c,txt = "";
			for (i = 0; i < x.length; i++) {
				c = x[i];
				if (i % 2 == 0) {
					c = c.toUpperCase();
				}
				txt += c;
			}
			return txt;
		}
	});
	
</script>

<a href="latihan11.php">next</a>

</body>
</html>