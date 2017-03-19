<!DOCTYPE html>
<html>
<head>
	<title>Angular latihan</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<div ng-app="" ng-init="name2='Raka Maheka A'">
	<p>NAME : <input type="text" ng-model="name"></p>
	<h1>Hello {{ name }}</h1>
	<p>I'm {{ 117 - 97 }} years old</p>
	<p ng-bind="name2"></p>
</div>

<a href="latihan2.php">next</a>

</body>
</html>