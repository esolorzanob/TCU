angular.module('UserController', []).controller('UserController', ['$scope', 'User', '$localStorage', '$location',
  function ($scope, User, $localStorage, $location) {
    $scope.login = function () {
      
      var user = new User({
        usuario: this.usuario,
        password: this.password
      });
      user.$login(function (user) {
        $localStorage.token = user.token;
        $scope.getAuthenticatedUser(user);
      }, function (err) {
        console.log(err);
      });
    };

    $scope.create = function () {
      if (this.password != this.passwordConfirmation) {
        return alert('The passwords do not match.');
      }
      var user = new User({
        nombre: this.nombre,
        apellidos:this.apellidos,
        usuario: this.usuario,
        password: this.password,
        rol: 1
      });
      console.log(user.password);
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
