angular.module('ActivosController', []).controller('ActivosController', ['$scope', 'Activo', '$localStorage', '$location',
  function ($scope, Activo, $localStorage, $location) {
    $scope.activo = new Activo;
   
    $scope.guardar = function(){
       $scope.activo.$save();
    }
  }
  
  
]);
