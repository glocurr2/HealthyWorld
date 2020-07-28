// JavaScript Document
var app = angular.module('quizApp', []);
app.controller('quizCtrl', function($scope) {
	$scope.q = 1;
	$scope.score = 0;
	$scope.reset = function() {
    	$scope.q = 1;
		$scope.score = 0;
	}
});