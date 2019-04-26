angular.module("Mangular", [])
    .controller("HelloWorldCtrl", function($scope) {  
    $scope.message="Hola a todos" 
    })
    .controller("HelloWorldCtrl2", function($scope) {  
        $scope.message="Hola a de nuevo" 
    });