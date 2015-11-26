angular.module('ActivosController', []).controller('ActivosController', ['$scope', '$location', '$routeParams', 'Activo',
  function ($scope, $location, $routeParams, Activo) {
  
    var splitPath = $location.path().split('/');
      var activoId = splitPath[splitPath.length - 1];
     $scope.activo = Activo.get({activoId: activoId},function(activo){
      activo.Fecha_Factura = new Date(activo.Fecha_Factura);
      activo.Fecha_Devolucion = new Date(activo.Fecha_Devolucion);
      activo.Fecha_Prestamo = new Date(activo.Fecha_Prestamo);
     });
     
    
    $scope.editar = function(){
       $scope.activo.$update();
    }
  }
  
]);
