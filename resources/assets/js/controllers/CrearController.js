angular.module('CrearController', []).controller('CrearController', ['$scope', 'Activo', '$localStorage', '$location', 'User',
  function ($scope, Activo, $localStorage, $location, User) {
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
    
    $scope.activo = new Activo;
   
    $scope.guardar = function(){
       $scope.activo.$save();
       $location.url('activos/list_activos');
    }
  }  
]);
