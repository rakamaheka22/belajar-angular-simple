<!DOCTYPE html>
<html>
<head>
	<title>Angular latihan</title>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<style type="text/css">
	input.ng-invalid {
		background-color: red;
	}
</style>
<body>

<form ng-app="" name="myForm" ng-init="myText = 'post@mail.com'">
	Email <input type="email" name="myEmail" ng-model="myText" required>
	<h1>Status :</h1>
	Valid : {{ myForm.myEmail.$valid }} <br>
	Dirty : {{ myForm.myEmail.$dirty }} <br>
	Touched : {{ myForm.myEmail.$touched }} <br>
	Invalid : {{ myForm.myEmail.$invalid }} <br>
	Pending : {{ myForm.myEmail.$pending }} <br>
	Untouched : {{ myForm.myEmail.$untouched }} <br>
	Pristine : {{ myForm.myEmail.$pristine }} <br>
	Empty : {{ myForm.myEmail.$empty }} <br>
	Not Empty : {{ myForm.myEmail.$not-empty }} <br>
</form>

<a href="latihan7.php">next</a>

</body>
</html>