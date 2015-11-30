<form name="loginForm" ng-controller="UserController" ng-submit="create()"
      class="form-horizontal" novalidate>
    <div class="form-group">
         <h3>Por favor ingrese toda la información</h3>
        <div class="col-md-3">
            <input type="text" id="nombre" ng-model="Nombre"
                   class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="apellidos" ng-model="Apellidos"
                   class="form-control" placeholder="Apellidos">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="usuario" ng-model="Usuario"
                   class="form-control" placeholder="Usuario">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="password" id="password" ng-model="password"
                   class="form-control" placeholder="Contraseña">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="password" id="passwordConfirmation" ng-model="passwordConfirmation"
                   class="form-control" placeholder="Digite la contraseña nuevamente">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Crear Usuario</button>
        </div>
    </div>
</form>
