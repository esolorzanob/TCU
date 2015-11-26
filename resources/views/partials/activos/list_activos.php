<div ng-controller="ListController" class="list-activos-wrapper">
	<section class="content">
    <section class="cf container-width">
      <section class="list-container main-container">
		  <h3>Activos</h3>
		  <div class="activos-container">
	<table class="grid-table table-striped table-hover">
		<tr>
				<th>
				    <a href="javascript:void(0);">#
				    </a>
				</th> 	    
			    <th>
				    <a href="javascript:void(0);">Nombre
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
			   
			    <th>Eliminar</th>
				<th>Crear Perfil</th>	    
		    </tr>
			<tr ng-repeat="activo in activos">
				<td>{{activo.Id_Activo}}</td>
				<td>{{activo.Descripcion}}</td>		
				<td>{{activo.Tipo}}</td>
				<td>{{activo.Condicion}}</td>
				<td>{{activo.Estado}}</td>
				<td><i class="fa fa-trash fa-lg"></i></td>
				<td><i class="fa fa-share gray" ng-show="application.estado != 'Graduado'"></i></td>
			</tr>
	  </table>
	  </div>
	  </section>
	  </section>
	  </section>
</div>