<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CoberturaProposta;
use App\Models\CoberturaRespostas;
use App\Models\Franquia;
use App\Models\FranquiaProposta;
use App\Models\Proposta;
use App\Models\QuestionarioRespostas;
use App\Models\Solicitacao;
use App\Models\User;
use App\Models\Veiculo;
use App\Models\VeiculoProposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SolicitacaoSeguradoraApiController extends Controller
{
   

    protected $model;

    public function __construct(Proposta $users, Request $request)
    {
        $this->model = $users;
        $this->request = $request;

    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = $this->model->paginate();

        return response()->json($data, 200);
    }
   
   
   
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function solicitacao(Request $request)
    {
        $dataForm = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        $user = User::find($dataForm["user_id"]);

        if ($user->user_type == "3") {

            return response()->json([
                'type' => 'error',
                'message' => 'Acesso permitido somente para perfil seguradora.',
                'data' => "",
            ], 200);

        }

        $solicitacoes = Solicitacao::where('status', '=', "A")->get();

        $arraySolicitacao = array();
        $pontos = 0;

        foreach ($solicitacoes as $ss) {

            $solicitacao = Solicitacao::with('cobertura')->with('tipoSeguro')->find($ss->id);
            $userSolicitante = User::with('redessociais')->find($ss->user_id);

            if ($solicitacao->tipo_seguro_id == "1") {
                $veiculo = Veiculo::where('user_id', '=', $ss->user_id)->get()->first();
                $solicitacao["veiculo"] = $veiculo;
                //recuperar questionario
                $questionarioResposta = QuestionarioRespostas::where('user_id', '=', $ss->user_id)->get();
                foreach ($questionarioResposta as $ponto) {
                    $pontos = $pontos + $ponto->pontos;
                }

                $solicitacao["questionario"] = $questionarioResposta;
            }

            $solicitacao["user"] = $userSolicitante;
            array_push($arraySolicitacao, $solicitacao);
        }

        $retorno["solicitacoes"] = $arraySolicitacao;
        $retorno["pontuacaoRespostas"] = $pontos;

        return response()->json([
            'type' => 'success',
            'message' => 'Solicitação em aberto aguardandando proposta.',
            'data' => $retorno,
        ], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function propostaIniciar(Request $request)
    {

        $dataForm = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'solicitacao_id' => 'required|exists:solicitacaos,id',
            'data_inicio_vigencia' => 'required|date',
            'data_fim_vigencia' => 'required|date|after:data_inicio_vigencia',
            'validade_proposta' => 'required|date|after:data_inicio_vigencia',
            'valor' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        $user = User::find($dataForm["user_id"]);

        if ($user->user_type == "3") {

            return response()->json([
                'type' => 'error',
                'message' => 'Acesso permitido somente para perfil seguradora.',
                'data' => "",
            ], 200);

        }

        $solicitacao = Solicitacao::find($dataForm["solicitacao_id"]);
        $proposta = Proposta::where('solicitacao_id', '=', $solicitacao->id)->where('user_id_corretor', '=', $user->id)->first();

        if ($proposta) {

            $proposta->data_inicio_vigencia = $dataForm["data_inicio_vigencia"];
            $proposta->data_fim_vigencia = $dataForm["data_fim_vigencia"];
            $proposta->validade_proposta = $dataForm["validade_proposta"];
            $proposta->valor = $dataForm["valor"];
            $proposta->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Proposta em andamento',
                'data' => $proposta,
            ], 200);

        } else {

            $proposta = new Proposta();
            $proposta->user_id = $solicitacao->user_id;
            $proposta->user_id_corretor = $user->id;
            $proposta->solicitacao_id = $solicitacao->id;
            $proposta->data_inicio_vigencia = $dataForm["data_inicio_vigencia"];
            $proposta->data_fim_vigencia = $dataForm["data_fim_vigencia"];
            $proposta->validade_proposta = $dataForm["validade_proposta"];
            $proposta->valor = $dataForm["valor"];

            $questionarioResposta = QuestionarioRespostas::where('user_id', '=', $solicitacao->user_id)->get();
            $pontos = 0;
            foreach ($questionarioResposta as $ponto) {
                $pontos = $pontos + $ponto->pontos;
            }

            $proposta->scoreFinal = 50 + $pontos;
            $proposta->save();

            $veiculo = Veiculo::where('user_id', '=', $proposta->user_id)->first();

            $veiculoProposta = new VeiculoProposta();
            $veiculoProposta->veiculo_id = $veiculo->id;
            $veiculoProposta->proposta_id = $proposta->id;
            $veiculoProposta->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Proposta gerada com sucesso',
                'data' => $proposta,
            ], 200);

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function incluirCobertura(Request $request, $id)
    {
        $dataForm = $request->all();
        $user = new User();
        $valid = true;
        $arrayCoberturas = array();

        foreach ($dataForm as $resposta) {

            if ($valid) {
                $proposta = Proposta::where('id', '=', $id)->where('user_id_corretor', '=', $resposta["user_id"])->first();
                $valid = false;
                if (!$proposta) {
                    return response()->json([
                        'type' => 'error',
                        'message' => 'Proposta não localizada',
                        'data' => '',
                    ], 200);
                }
            }

            $verificarCoberturaResposta = CoberturaRespostas::where('solicitacao_id', '=', $proposta->solicitacao_id)->where('cobertura_id', '=', $resposta["cobertura_id"])->first();

            if ($verificarCoberturaResposta) {
                $clean = CoberturaProposta::where('proposta_id', '=', $proposta->id)->where('cobertura_id', '=', $resposta["cobertura_id"])->delete();
                $cobRes = new CoberturaProposta();
                $cobRes->proposta_id = $proposta->id;
                $cobRes->cobertura_id = $resposta["cobertura_id"];
                $cobRes->valor = $resposta["valor"];
                $cobRes->descricaoAdicional = $resposta["descricaoAdicional"];
                $cobRes->save();
                array_push($arrayCoberturas, $cobRes);
            }
        }

        $proposta['coberturas'] = $arrayCoberturas;

        return response()->json([
            'type' => 'success',
            'message' => 'Coberturas incluidas com sucesso',
            'data' => $proposta,
        ], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function incluirFranquia(Request $request, $id)
    {
        $dataForm = $request->all();
        $user = new User();
        $valid = true;
        $arrayFranquia = array();

        foreach ($dataForm as $resposta) {

            if ($valid) {
                $proposta = Proposta::where('id', '=', $id)->where('user_id_corretor', '=', $resposta["user_id"])->first();
                $valid = false;
                if (!$proposta) {
                    return response()->json([
                        'type' => 'error',
                        'message' => 'Proposta não localizada',
                        'data' => '',
                    ], 200);
                }
            }

            $franquia = Franquia::find($resposta["franquia_id"])->first();

            if ($franquia) {

                if ($valid) {
                    $clean = FranquiaProposta::where('proposta_id', '=', $proposta->id)->delete();
                    $valid = false;
                }

                $cobRes = new FranquiaProposta();
                $cobRes->proposta_id = $proposta->id;
                $cobRes->franquia_id = $franquia->id;
                $cobRes->valor = $resposta["valor"];
                $cobRes->nome = $franquia->nome;
                $cobRes->save();
                array_push($arrayFranquia, $cobRes);
            }

        }

        $proposta['franquias'] = $arrayFranquia;

        return response()->json([
            'type' => 'success',
            'message' => 'Franquias incluidas com sucesso',
            'data' => $proposta,
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $dataForm = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        $proposta = Proposta::where('id', '=', $id)->where('user_id_corretor', '=', $dataForm["user_id"])->first();

        if ($proposta) {

            return response()->json([
                'type' => 'success',
                'message' => 'Proposta em andamento',
                'data' => $proposta,
            ], 200);

        } else {

            return response()->json([
                'type' => 'error',
                'message' => 'Proposta não localizada',
                'data' => '',
            ], 200);

        }

    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function enviar(Request $request,$id)
    {
        $dataForm = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        $proposta = Proposta::where('id', '=', $id)->where('user_id_corretor', '=', $dataForm["user_id"])->first();

        if ($proposta) {

            $proposta->status="A";
            $proposta->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Proposta enviada com sucesso',
                'data' => $proposta,
            ], 200);

        } else {

            return response()->json([
                'type' => 'error',
                'message' => 'Proposta não localizada',
                'data' => '',
            ], 200);

        }
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


    public function todas() {

        return response()->json([
            'type' => 'success',
            'message' => 'Propostasaa em andamento',
            'data' =>'',
        ], 200);


    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vertodas(Request $request)
    {
        return response()->json([
            'type' => 'success',
            'message' => 'Propostasaa em andamento',
            'data' =>'',
        ], 200);

        $dataForm = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        $proposta = Proposta::where('user_id_corretor', '=',  $dataForm["user_id"])
        ->paginate();

       

           
       
    }
}
