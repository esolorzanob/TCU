<form name="loginForm" ng-controller="UserController" ng-submit="login()"
      class="form-horizontal" novalidate>
      <h3>Por favor ingrese su nombre de usuario y contraseña</h1>
      <p></p>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="usuario" ng-model="Usuario"
                   class="form-control" placeholder="Usuario">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="password" id="password" ng-model="password"
                   class="form-control" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </div>
</form>
