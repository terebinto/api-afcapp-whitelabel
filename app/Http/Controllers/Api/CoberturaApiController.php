<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cobertura;
use App\Models\CoberturaRespostas;
use App\Models\Solicitacao;
use Illuminate\Http\Request;

class CoberturaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find($id)
    {
        $data = Cobertura::where('tipo_seguro_id', '=', $id)->paginate();

        return response()->json($data,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvarRespostas(Request $request)
    {
        $dataForm = $request->all();
        $solicitacao = new Solicitacao();
        $limpeza = true;

        foreach ($dataForm as $resposta) {

            $validarSolcitacaoExistente = Solicitacao::where('id', '=', $resposta['solicitacao_id'])
                ->first();

            if (!$validarSolcitacaoExistente) {

                return response()->json([
                    'type' => 'error',
                    'message' => 'Solicitação não encontrada',
                    'data' => '',
                ], 200);

            } else {

                //se a solicitacao ja esta em andamento
                if ($validarSolcitacaoExistente->status == "A") {
                    return response()->json([
                        'type' => 'success',
                        'message' => 'Leilão já em andamento.',
                        'data' => $validarSolcitacaoExistente,
                    ], 200);
                }

                $solicitacao->id = $validarSolcitacaoExistente->id;

                if ($limpeza) {
                    $coberturaResposta = CoberturaRespostas::where('solicitacao_id', '=', $resposta['solicitacao_id'])->delete();
                    $limpeza = false;
                }

                $coberturaDefault= Cobertura::find($resposta['cobertura_id']);
                $cobertura = new CoberturaRespostas();
                $cobertura->solicitacao_id = $resposta['solicitacao_id'];
                $cobertura->cobertura_id = $resposta['cobertura_id'];
                $cobertura->nome = $coberturaDefault->name;
                $cobertura->save();
            }
        }

        $cobertura = CoberturaRespostas::where('solicitacao_id', '=', $solicitacao->id)->paginate();

        return response()->json([
            'type' => 'success',
            'message' => 'Cobertura(s) atualizadas com sucesso',
            'data' => $cobertura,
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
