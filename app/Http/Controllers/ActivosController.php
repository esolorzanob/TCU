<?php namespace Todo\Http\Controllers;

use Illuminate\Http\Request;
use Todo\Http\Requests;
use Todo\Activo;

class ActivosController extends Controller
{

    private $request;
    
    function __construct(Request $request)
    {
        $this->request = $request;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Activo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = $this->request->all();
        $activo = new Activo($input);
        if (!$activo->save()) {
            abort(500, "Saving failed.");
        }
        return $activo;
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
       return Activo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $activo = Activo::find($id);
        $activo->Tipo = $this->request->input('Tipo');
        $activo->Descripcion = $this->request->input('Descripcion');
        $activo->Numero_Factura = $this->request->input('Numero_Factura');
        $activo->Fecha_Factura = $this->request->input('Fecha_Factura');
        $activo->Financiado_por = $this->request->input('Financiado_por');
        $activo->Fecha_Prestamo = $this->request->input('Fecha_Prestamo');
        $activo->Fecha_Devolucion = $this->request->input('Fecha_Devolucion');
        $activo->Condicion = $this->request->input('Condicion');
        $activo->Estado = $this->request->input('Estado');
        $activo->Entregado_por = $this->request->input('Entregado_por');
        $activo->Centro = $this->request->input('Centro');
        $activo->Familia = $this->request->input('Familia');
        if (!$activo->save()) {
            abort(500, "Saving failed");
        }
        return $activo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        return Activo::destroy($id);
    }

}
