(function () {
    'use strict';

    angular
        .module('myApp', ['ngRoute', 'ngCookies'])
        .config(config);

    config.$inject = ['$routeProvider', '$locationProvider'];
    function config($routeProvider, $locationProvider) {
        $routeProvider
            .when('/', {
                controller:'ProductsController',
				templateUrl: 'views/products.html'
            })

            .when('/products', {
                controller:'ProductsController',
				templateUrl: 'views/products.html'
            })

            .when('/register', {
                controller:'ProductsController',
				templateUrl:'views/register.html'
			})

			.when('/login', {
                controller: 'ProductsController',
                templateUrl: 'views/login.html',
            })
            .when('/topup', {
                controller: 'ProductsController',
                templateUrl: 'views/topup.html',
            })
            .when('/transactions', {
                controller: 'ProductsController',
                templateUrl: 'views/transactions.html',
            })

            .when('/logout', {
                controller: 'ProductsController',
                templateUrl: 'views/logout.html',
            })

            .when('/products/buy/:id/:title',{
                controller:'ProductsController',
                templateUrl: 'views/productbuy.html'
            })
            .when('/products/transaction/:id/:amount/:title',{
                controller:'ProductsController',
                templateUrl: 'views/transaction.html'
            })
            .otherwise({ redirectTo: '/login' });
    }


})();