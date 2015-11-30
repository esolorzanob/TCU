<div ng-controller="ListController" class="list-activos-wrapper">
	<section class="content">
    <section class="cf container-width">
      <section class="list-container main-container">
		  <h3>Activos</h3>
		  <hr />
		   <input type="text" placeholder="Buscar" ng-model="filtro.Descripcion" class="left-custom" />
        <select name="estado" ng-model="filtro.Estado">
			<option value="" selected disabled>Estado</option>
			<option value="">Todos</option>
			 <option>En Uso</option>
                          <option>Desechado</option>
						   <option>En Bodega</option>	
		</select>
		<select name="tipo" ng-model="filtro.Tipo">
			<option value="" selected disabled>Tipo</option>
			<option value="">Todos</option>
			<option>Oficina</option>
			<option>Bebe</option>
		                                 
		</select>
		  <div class="activos-container">
	<table class="grid-table table-striped table-hover">
		<tr>
				<th>
				    <a href="javascript:void(0);">#
				    </a>
				</th> 	    
			    <th>
				    <a href="javascript:void(0);">Descripcion
				    	<span ng-show="orderByField == 'nombre'"><span class="fa fa-caret-down"></span></span>
				    </a>
				</th> 
			    <th>
			    	<a href="javascript:void(0);" >
			    		Tipo				    	
				    </a>
			    </th> 
			    <th>
			    	<a href="javascript:void(0);" >Condicion
				    	<span ng-show="orderByField == 'telefono_celular'"><span class="fa fa-caret-down"></span></span>
				    </a>
			    </th>
			    <th>
			    	<a href="javascript:void(0);" >Estado
				    	<span ng-show="orderByField == 'fecha_creacion'"><span class="fa fa-caret-down"></span></span>
				    </a>
			    </th>
			   
			    <th ng-show="authenticatedUser.Rol == 1">Editar</th>
				<th ng-show="authenticatedUser.Rol != 1">Ver</th>
					    
		    </tr>
			<tr ng-repeat="activo in activos | filter:filtro | filter:search:strict |orderBy:orderByField:reverseSort">
				<td>{{activo.id}}</td>
				<td>{{activo.Descripcion}}</td>		
				<td>{{activo.Tipo}}</td>
				<td>{{activo.Condicion}}</td>
				<td>{{activo.Estado}}</td>
				<td><a href="/activos/edit_activos/{{activo.id}}">#</a></td>
				
			</tr>
	  </table>
	  </div>
	  </section>
	  </section>
	  </section>
</div>