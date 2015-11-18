<div class="form_wrapper">
   <form name="formActivos" ng-controller="ActivosController" role="form"
      class="form-horizontal" novalidate>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="tipo" ng-model="activo.tipo"
                   class="form-control" placeholder="Tipo">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="nombre" ng-model="activo.nombre"
                   class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="numero_factura" ng-model="activo.numero_factura"
                   class="form-control" placeholder="Numero de Factura">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="fecha_factura" ng-model="activo.fecha_factura"
                   class="form-control" placeholder="Fecha de Factura">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <input type="text" id="financiado_por" ng-model="activo.financiado_por"
                   class="form-control" placeholder="Financiado por">
        </div>
    </div>
	<div class="form-group">
        <div class="col-md-3">
            <input type="text" id="fecha_prestamo" ng-model="activo.fecha_prestamo"
                   class="form-control" placeholder="Fecha de Prestamo">
        </div>
    </div>
	<div class="form-group">
        <div class="col-md-3">
            <input type="text" id="fecha_devolucion" ng-model="activo.fecha_devolucion"
                   class="form-control" placeholder="Fecha de Devolución">
        </div>
    </div>
	<div class="form-group">
        <div class="col-md-3">
            <input type="text" id="condicion" ng-model="activo.condicion"
                   class="form-control" placeholder="Condición">
        </div>
    </div>
	<div class="form-group">
        <div class="col-md-3">
            <input type="text" id="estado" ng-model="activo.estado"
                   class="form-control" placeholder="Estado">
        </div>
    </div>
	<div class="form-group">
        <div class="col-md-3">
            <input type="text" id="entregado_por" ng-model="activo.entregado_por"
                   class="form-control" placeholder="Entregado por">
        </div>
    </div>
	<div class="form-group">
        <div class="col-md-3">
            <input type="text" id="centro" ng-model="activo.centro"
                   class="form-control" placeholder="Centro">
        </div>
    </div>
	<div class="form-group">
        <div class="col-md-3">
            <input type="text" id="familia" ng-model="activo.familia"
                   class="form-control" placeholder="Familia">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" ng-click="guardar()">Guardar</button>
        </div>
    </div>
</form>

 </div>