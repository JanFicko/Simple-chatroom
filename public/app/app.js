/**
 * Defining module of angular app.
 */
var app = angular.module('chatApp', [
    'ngRoute'
]);

/**
 * This defines routes and associates each route with a view.
 */
/*app.config(function ($routeProvider) {

 // Defines route with dynamic controller and view for said route.
 $routeProvider.when('/', {
 controller: 'MessageController',
 templateUrl: 'app/partials/messages.html'
 });

 // Defines route with parameter in it.
 $routeProvider.when('/chat/:chatID', {
 controller: '',
 templateUrl: ''
 });

 $routeProvider.otherwise({redirectTo: '/'});

 });*/