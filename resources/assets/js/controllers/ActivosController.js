angular.module('ActivosController', []).controller('ActivosController', ['$scope', '$location', '$routeParams', 'Activo', 'User', '$localStorage',
  function ($scope, $location, $routeParams, Activo, $localStorage) {
     $scope.getAuthenticatedUser = function (user) {
     
      if (user) {
        $scope.authenticatedUser = user;
        
        return;
      }

      if (typeof $localStorage.token === 'undefined') {
        
        return null;
      }

      new User().$getByToken(function (user) {
        $scope.authenticatedUser = user;
        
      }, function (err) {
        console.log(err);
      });
    };
    
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
