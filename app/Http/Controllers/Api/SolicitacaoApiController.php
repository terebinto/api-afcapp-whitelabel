<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CoberturaRespostas;
use App\Models\Questionario;
use App\Models\QuestionarioRespostas;
use App\Models\Solicitacao;
use App\Models\User;
use App\Models\Veiculo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SolicitacaoApiController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
    public function store(Request $request)
    {
        $dataForm = $request->all();

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'tipo_seguro_id' => 'required|exists:tipo_seguros,id',

        ]);

        if ($validator->fails()) {
            return response()->json([
                'type' => 'fail',
                'data' => $validator->errors(),
            ]);
        }

        $user = User::find($dataForm['user_id']);

        if ($user->validateUsuario($user)) {
            return response()->json([
                'type' => 'error',
                'message' => 'Informações do usuário(dados pessoais e endereço) são obrigatorias.',
                'data' => $user,
            ], 200);
        }

        //verificar se tem todas as respostas completas
        $questionario = Questionario::where('tipo_seguro_id', '=', $dataForm['tipo_seguro_id'])->get();

        foreach ($questionario as $cc) {

            $resposta = QuestionarioRespostas::where('questionario_id', '=', $cc->id)->where('user_id', '=', $dataForm['user_id'])->first();

            if (!$resposta) {
                return response()->json([
                    'type' => 'error',
                    'message' => 'Necessário finalizar o questionario obrigatorio para iniciar uma nova solicitação.',
                    'data' => $cc->pergunta,
                ], 200);
            }
        }

        if ($dataForm['tipo_seguro_id'] == "1") {
            $veiculo = Veiculo::where('user_id', '=', $dataForm['user_id'])->get()->first();

            if (!$veiculo) {
                return response()->json([
                    'type' => 'error',
                    'message' => 'Usuário sem veículo cadastrado. Favor completar o questionário de perguntas.',
                    'data' => '',
                ], 200);
            }
        }

        $validarSolcitacaoExistente = Solicitacao::where('user_id', '=', $dataForm['user_id'])
            ->where('tipo_seguro_id', '=', $dataForm['tipo_seguro_id'])
            ->where('status', '=', "C")
            ->first();

        if ($validarSolcitacaoExistente) {
            return response()->json([
                'type' => 'success',
                'message' => 'Solicitação em andamento já existente.',
                'data' => $validarSolcitacaoExistente,
            ], 200);
        }

        $solicitacao = new Solicitacao();
        $solicitacao->user_id = $dataForm['user_id'];
        $solicitacao->tipo_seguro_id = $dataForm['tipo_seguro_id'];

        if ($request->nome) {
            $solicitacao->nome = $dataForm['nome'];
        }

        if ($request->descricao) {
            $solicitacao->descricao = $dataForm['descricao'];
        }

        $solicitacao->save();
        return response()->json([
            'type' => 'success',
            'message' => 'Solicitação cadastrada com sucesso',
            'data' => $solicitacao,
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
        $solicitacao = $this->model->find($id);

        if (!$solicitacao) {
            return response()->json([
                'type' => 'error',
                'message' => 'Solicitacao não encontrada',
                'data' => '',
            ], 200);

        } else {

            return response()->json([
                'type' => 'success',
                'message' => 'Operation sucess',
                'data' => $solicitacao,
            ], 200);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $validarSolcitacaoExistente = Solicitacao::where('id', '=', $id)
            ->where('status', '=', "C")
            ->first();

        if ($validarSolcitacaoExistente) {

            $dataForm = $request->all();

            $validator = Validator::make($request->all(), [
                'nome' => 'required',
                'descricao' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'type' => 'fail',
                    'data' => $validator->errors(),
                ]);
            }

            $validarSolcitacaoExistente->nome = $dataForm['nome'];
            $validarSolcitacaoExistente->descricao = $dataForm['descricao'];

            $validarSolcitacaoExistente->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Solicitação atualizada com sucesso',
                'data' => $validarSolcitacaoExistente,
            ], 200);

        } else {

            return response()->json([
                'type' => 'success',
                'message' => 'Solicitação não encontrada',
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
    public function iniciar(Request $request, $id)
    {

        $validarSolcitacaoExistente = Solicitacao::where('id', '=', $id)
            ->where('status', '=', "C")
            ->first();

        if ($validarSolcitacaoExistente) {

            $dataForm = $request->all();

            $validator = Validator::make($request->all(), [
                'data_fim' => 'required|date',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'type' => 'fail',
                    'data' => $validator->errors(),
                ]);
            }

            if ($validarSolcitacaoExistente->tipo_seguro_id == "1") {

                $cobertura = CoberturaRespostas::where('solicitacao_id', '=', $validarSolcitacaoExistente->id)->get()->first();

                if (!$cobertura) {
                    return response()->json([
                        'type' => 'error',
                        'message' => 'É obrigatório a inclusão de cobertura para seu seguro',
                        'data' => '',
                    ]);
                }

            }

            $validarSolcitacaoExistente->status = 'A';
            $validarSolcitacaoExistente->data_inicio = now();
            $validarSolcitacaoExistente->data_fim = $dataForm['data_fim'];
            $validarSolcitacaoExistente->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Leilão iniciado com sucesso',
                'data' => $validarSolcitacaoExistente,
            ], 200);

        } else {

            $validarSolcitacaoExistente = Solicitacao::where('id', '=', $id)
                ->where('status', '=', "A")
                ->first();

            if ($validarSolcitacaoExistente) {

                return response()->json([
                    'type' => 'success',
                    'message' => 'Leilão em andamento',
                    'data' => $validarSolcitacaoExistente,
                ], 200);

            } else {

                return response()->json([
                    'type' => 'success',
                    'message' => 'Solicitação não encontrada',
                    'data' => '',
                ], 200);

            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $dataForm = $request->all();

        $validarSolcitacaoExistente = Solicitacao::where('id', '=', $id)
            ->whereNotIn('status', '=', "F")
            ->first();

        if ($validarSolcitacaoExistente) {

            $validarSolcitacaoExistente->status = 'F';
            $validarSolcitacaoExistente->data_fim = now();
            $validarSolcitacaoExistente->save();

            return response()->json([
                'type' => 'success',
                'message' => 'Solicitação encerrada com sucesso',
                'data' => $validarSolcitacaoExistente,
            ], 200);

        } else {

            return response()->json([
                'type' => 'success',
                'message' => 'Solicitação não encontrada',
                'data' => '',
            ], 200);

        }
    }

}
