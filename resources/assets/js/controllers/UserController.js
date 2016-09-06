angular.module('UserController', []).controller('UserController', ['$scope', 'User', '$localStorage', '$location',
  function ($scope, User, $localStorage, $location) {
    $scope.login = function () {
      
      var user = new User({
        Usuario: this.Usuario,
        password: this.password
      });
      user.$login(function (user) {
        $localStorage.token = user.token;
        $scope.getAuthenticatedUser(user);
        $location.url('activos/list_activos');
      }, function (err) {
        $scope.error = "El nombre de usuario o la contraseña estan incorrectos."
        console.log(err);
      });
    };

    $scope.create = function () {
      if (this.password != this.passwordConfirmation) {
        return alert('The passwords do not match.');
      }
      var user = new User({
        Nombre: this.Nombre,
        Apellidos:this.Apellidos,
        Usuario: this.Usuario,
        password: this.password,
        rol: 1
      });
      
      user.$save(function (user) {
        $localStorage.token = user.token;
        $scope.getAuthenticatedUser(user);
        $location.path('users/view/' + user.id);
      }, function (err) {
        console.log(err);
      });
    };

    $scope.findOne = function () {
      var splitPath = $location.path().split('/');
      var userId = splitPath[splitPath.length - 1];
      $scope.user = User.get({userId: userId});
    };
  }
]);
