/**
 * Defining module of angular app.
 */
var app = angular.module('chatApp', [
    'ngRoute'
]);

/**
 * This defines routes and associates each route with a view.
 */
app.config(function ($routeProvider) {

    // Defines route with dynamic controller and view for said route.
    /*$routeProvider.when('/', {
        controller: 'MessageController',
        templateUrl: 'app/partials/messages.html'
    });*/

    // Defines route with parameter in it.
    /*$routeProvider.when('/chat/:chatID', {
     controller: '',
     templateUrl: ''
     });*/

    $routeProvider.when('/chat', {
        controller: 'ChatController',
        templateUrl: 'app/partial/chat.html'
    });

    $routeProvider.when('/message', {
        templateUrl: 'app/partial/message.html'
    });

    $routeProvider.when('/profile', {
        templateUrl: 'app/partial/profile.html'
    });


    $routeProvider.otherwise({
        redirectTo: '/chat'
    });
});