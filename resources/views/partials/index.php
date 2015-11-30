<p ng-show="authenticatedUser">
   <h3> Bienvenid@ {{authenticatedUser.Nombre}}, para empezar haga click en un link de la barra de navegación.</h3>
</p>
<div ng-show="!authenticatedUser">
   <h1>Sistema de Actvios Casa Viva</h1>
   <h3>Bienvenid@ para empezar haga click <a href="/auth/login">aquí</a></h3>
    

</div>
