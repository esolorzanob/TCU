<form name="loginForm" ng-controller="UserController" ng-submit="create()"
      class="form-horizontal" novalidate>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="nombre" ng-model="nombre"
                   class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="apellidos" ng-model="apellidos"
                   class="form-control" placeholder="Apellidos">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="usuario" ng-model="usuario"
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
        <div class="col-md-3">
            <input type="password" id="passwordConfirmation" ng-model="passwordConfirmation"
                   class="form-control" placeholder="Password again">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
    </div>
</form>
