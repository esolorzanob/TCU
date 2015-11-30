<div class="form_wrapper">
	<h1>Editar Activo</h1>
   <form name="formActivos" ng-controller="ActivosController" role="form"
      class="form-horizontal" novalidate>
	  <div class="row">
      <div class="large-4 small-12 columns">
    <div class="form-group">
		
        <div class="col-md-3">
			 <label class="control-label" for="txtNombre"> Tipo</label>
            <select id="tipo" ng-model="activo.Tipo" tabindex="2" class="form-control" placeholder="Seleccione el tipo de Activo">
                          <option>Oficina</option>
                          <option>Bebe</option>
                     </select>
        </div>
		 <div class="col-md-6">
			  <label class="control-label" for="txtNombre">Descripcion</label>
            <input type="text" id="descripcion" ng-model="activo.Descripcion"
                   class="form-control" placeholder="Escriba la descripcion">
        </div>
    </div>
	</div>
	</div>
	 <div class="row">
      <div class="large-4 small-12 columns">
    <div class="form-group">
       <div class="col-md-3">
		   <label class="control-label" for="txtNombre">Número de Factura</label>
            <input type="text" id="numero_factura" ng-model="activo.Numero_Factura"
                   class="form-control" placeholder="Ingrese el numero de la factura">
        </div>
		 <div class="col-md-3">
			 <label class="control-label" for="txtNombre">Fecha de Factura</label>
			 <input id="fecha_factura" ng-model="activo.Fecha_Factura" tabindex="20" type="date" 
                        class="form-control">
            
        </div>
    </div>
	</div>
	</div>
    <div class="row">
      <div class="large-4 small-12 columns">
    <div class="form-group">
        <div class="col-md-3">
			<label class="control-label" for="txtNombre">Financiado por</label>
			 <select id="financiado_por" ng-model="activo.Financiado_por" tabindex="4" class="form-control" >
                          <option>Pani</option>
                          <option>Propio</option>
						   <option>JPS</option>
                          <option>Donado</option>
						 
                     </select>
           
        </div>
		<div class="col-md-3">
			<label class="control-label" for="txtNombre">Fecha de Préstamo</label>
            <input id="fecha_prestamo" ng-model="activo.Fecha_Prestamo" tabindex="7" type="date" 
                        class="form-control">
        </div>
    </div>
	</div>
	</div>
	 <div class="row">
      <div class="large-4 small-12 columns">
    <div class="form-group">
        <div class="col-md-3">
			<label class="control-label" for="txtNombre">Fecha de Devolución</label>
            <input id="fecha_prestamo" ng-model="activo.Fecha_Devolucion" tabindex="7" type="date" 
                        class="form-control">
        </div>
		<div class="col-md-3">
		   <label class="control-label" for="txtNombre">Condición</label>
             <select id="condicion" ng-model="activo.Condicion" tabindex="3" class="form-control" >
                          <option>Nuevo</option>
                          <option>Usado - Buenas Condiciones</option>
						   <option>Usado - Malas Condiciones</option>
                      
                     </select>
        </div>
    </div>
	</div>
	</div>
	 <div class="row">
      <div class="large-4 small-12 columns">
    <div class="form-group">
		<div class="col-md-3">
		   <label class="control-label" for="txtNombre">Estado</label>
             <select id="estado" ng-model="activo.Estado" tabindex="3" class="form-control" >
                          <option>En Uso</option>
                          <option>Desechado</option>
						   <option>En Bodega</option>
                      
                     </select>
        </div>
        <div class="col-md-3">
			<label class="control-label" for="txtNombre">Entregado por</label>
            <input id="fecha_prestamo" ng-model="activo.Entregado_por" type="text" 
                        class="form-control">
        </div>
		
    </div>
	</div>
	</div>
	 <div class="row">
      <div class="large-4 small-12 columns">
    <div class="form-group">
		 <div class="col-md-3">
			<label class="control-label" for="txtNombre">Centro</label>
            <select id="estado" ng-model="activo.Centro" tabindex="2" class="form-control" >
                          <option>San Pedro</option>
                          <option>Alajuela</option>
						 
                     </select>
        </div>
        <div class="col-md-3">
			<label class="control-label" for="txtNombre">Familia</label>
            <input id="fecha_prestamo" ng-model="activo.Familia" type="text" 
                        class="form-control">
        </div>
		
    </div>
	</div>
	</div>
	
    <div class="form-group">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" ng-click="editar()" ng-show="authenticatedUser.Rol == 1">Guardar</button>
        </div>
    </div>
</form>

 </div>