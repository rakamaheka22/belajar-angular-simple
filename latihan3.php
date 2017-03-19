<!DOCTYPE html>
<html>
<head>
	<title>Angular latihan</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<div ng-app="" ng-init="person={firstName:'John',lastName:'Doe'};position=[1,2,3,4,5,6]">
	
	The Name is {{ person.lastName }}
	<br>
	Position {{ position[1] }}
	
</div>

<a href="latihan4.php">next</a>

</body>
</html>