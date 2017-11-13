var myApp = angular.module('myApp');

myApp.controller('ProductsController', ['$scope', '$http', '$location', '$routeParams','$cookies', function($scope, $http, $location, $routeParams){
	console.log('ProductsController loaded...');

	$scope.getProducts = function(){
		$userid = window.sessionStorage.getItem('userid');
		$http.get('http://localhost/laravelbackend/public/api/v1/products').then(function(response){
			var data = response.data;
			var status = response.status;
			var statusText = response.statusText;
			var headers = response.headers;
			var config = response.config;
			$scope.products = data;
			if(status != 200)
			{
				alert(statusText);
			}
			if($userid == null)
			{
				window.location.href='#!/login';
			}
			
		});
	}

	$scope.addUser = function(){
		console.log($scope.user);
		$http.post('http://localhost/laravelbackend/public/api/v1/users', $scope.user).then(function(response){
			window.location.href='#!/login';

		});
	}

	$scope.loginUser = function(){
		console.log($scope.user);
		$http.post('http://localhost/laravelbackend/public/api/v1/users/check', $scope.user).then(function(response){
			if(response.data == 0)
			{
				alert('Invalid email or password');
			}
			else
			{
				console.log(response.data);
				window.sessionStorage.setItem('userid',response.data[0]);
				window.sessionStorage.setItem('bal',response.data[1]);
				//alert(window.sessionStorage.getItem('userid'));
				window.location.href='#!/';
			}
			
		});
	}

	$scope.addMony = function(){
		console.log($scope.mony);
		$userid = window.sessionStorage.getItem('userid');
		$http.post('http://localhost/laravelbackend/public/api/v1/transactions/add/'+$userid, $scope.mony).then(function(response){
			if($userid == null)
			{
				window.location.href='#!/login';
			}
			if(response.data[0].toString() == 'success')
			{
				window.sessionStorage.setItem('bal',response.data[1]);
				alert('Transaction Successful')
				window.location.href='#!/transactions';
			}
			else
			{
				alert('Transaction Failed')
			}
			

		});
	}

	$scope.getTransactions = function(){
		$userid = window.sessionStorage.getItem('userid');
		console.log($userid);
		$http.get('http://localhost/laravelbackend/public/api/v1/transactions/'+$userid).then(function(response){
			var data = response.data;
			var status = response.status;
			var statusText = response.statusText;
			var headers = response.headers;
			var config = response.config;
			$scope.transactions = data;
			console.log(data);
			if(status != 200)
			{
				alert(statusText);
			}
			if($userid == null)
			{
				window.location.href='#!/login';
			}
			
		});
	}
	$scope.getbal = function(){
		$scope.bal = window.sessionStorage.getItem('bal');
	};

	$scope.logout = function(){
		$scope.status = 'You have been loged out';
		window.sessionStorage.clear();
	};

	$scope.getProduct = function(){
		$userid = window.sessionStorage.getItem('userid');
		var id = $routeParams.id;
		$http.get('http://localhost/laravelbackend/public/api/v1/products/'+id).then(function(response){
			var data = response.data;
			var status = response.status;
			var statusText = response.statusText;
			var headers = response.headers;
			var config = response.config;
			$scope.product = data;
			if(status != 200)
			{
				alert(statusText);
			}
			if($userid == null)
			{
				window.location.href='#!/login';
			}
			
		});
	}

	$scope.buyProduct = function(){
		console.log($scope.user);
		var id = window.sessionStorage.getItem('userid');
		var amount = $routeParams.amount;
		var title = $routeParams.title;
		var total = window.sessionStorage.getItem('bal') - amount;
		$http.post('http://localhost/laravelbackend/public/api/v1/transactions/buy/'+id+'/'+amount+'/'+title, $scope.user).then(function(response){
		if(response.data.toString() == 'success')
		{
			window.sessionStorage.setItem('bal',total);
		}
		alert(response.data);
		window.location.href='#!/transactions';
		});
	}

}]);