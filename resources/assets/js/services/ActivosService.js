angular.module('ActivosService', []).factory('Activo', ['$resource',
  function ($resource) {
    return $resource('/api/activos/:activoId', {
      activoId: '@id'
    }, {
      update: {
        method: 'PUT'
      } 
      
    });
  }
]);