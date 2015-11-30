angular.module('ListController', []).controller('ListController', ['$scope', 'Activo', '$localStorage', '$location',
  function ($scope, Activo, $localStorage, $location) {
    $scope.filtro = {};
    $scope.activos = Activo.query({},function(){});
      
    $scope.guardar = function(){
       $scope.activo.$save();
    }
  }    
]);







