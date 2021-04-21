<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /** * Display a listing of the resource.     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        //listar todos os parametros da requisição
        $marcas = marca::all();
        //retornar o obejeto $marca
        return $marcas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Request recebendo dados da requisição - Paramentro $request representado a instacia do objeto
    public function store(Request $request)
    {   
        //listar todos os parametros da requisição
        Marca::create($request->all());
        //retornando a mensagem
        return 'chegamos(Store)';
        //
        $request->imagem;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */

     //Request recebendo dados da requisição - Paramentro marca representado a instacia do objeto
    public function update(Request $request, Marca $marca)
    {
        //listar todos os parametros da requisição
         $request->all();
         //exibir os dados na tela
         $marca->getAtrributes();
        //pegar o objeto instaciado $marca  e passar o parametro $request
         $marca->update($request->all());
         //retornar o obejeto $marca
         return $marca;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //getAttributes para pegar os atributos do objeto $marca
        //print_r( $marca->getAttributes());

        //recuperar o obejto $marca e executar o metodo delete
        $marca->delete();
        //retornar um array associativo e atribuir a mensagem
        return ['msg' => 'a marca foi removida'];
    }   
}
