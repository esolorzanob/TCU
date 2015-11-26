angular.module('ActivosController', []).controller('ActivosController', ['$scope', '$location', '$routeParams', 'Activo',
  function ($scope, $location, $routeParams, Activo) {
   
    var splitPath = $location.path().split('/');
      var activoId = splitPath[splitPath.length - 1];
     $scope.activo = Activo.get({activoId: activoId});
     console.log($scope.activo.Fecha_Devolucion);
      $scope.activo.Fecha_Devolucion = new Date($scope.activo.Fecha_Devolucion);
    
    
    $scope.guardar = function(){
       $scope.activo.$save();
    }
  }
  
]);
