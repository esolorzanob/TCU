<!doctype html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <title>Casa Viva - Activos</title>
    <script type="application/javascript" src="<% elixir('js/all.js') %>"></script>
    <link rel="stylesheet" href="/css/app.css"/>
    <link rel="stylesheet" href="<% elixir('css/all.css') %>"/>
</head>
<body ng-app="todoApp" ng-controller="MainController" ng-init="getAuthenticatedUser()">
<div id="header">
    <div id="bglogo">
        <div class="logo">
            <a href="/">
                <img class="img" src="http://casaviva.org/newsite/wp-content/uploads/2015/11/cvlogo.gif">
            </a>
        </div>
    </div>
</div>
<nav class="navbar navbar-inverse">
    <div class="container" >
       
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" >
                <li ng-if="authenticatedUser != null"><a href="/activos/list_activos">Activos</a></li>
                <li ng-if="authenticatedUser != null"><a href="/activos/crear_activos">Crear Activo</a></li>
                <li ng-if="authenticatedUser != null"><a ng-href="/auth/signup">Crear Usuario</a></li>
                <li ng-if="authenticatedUser == null"><a href="/auth/login">Ingresar</a></li>
                <li ng-if="authenticatedUser != null" ng-click="logout()"><a href="#">Salir</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div ng-view>
    </div>
</div>

</body>
</html>
